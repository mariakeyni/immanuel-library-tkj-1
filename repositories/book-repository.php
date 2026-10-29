<?php
require_once __DIR__ . "/../config/database.php";

function getBooks($search = '', $category = '', $limit = 10, $offset = 0)
{
    global $pdo;

    $query = "select b.id, b.title, b.stock, c.name as category from books b
                left join categories c on b.category_id = c.id
                where 1=1";
    $params = [];

    if ($search) {
        $query .= " and b.title like :search";
        $params['search'] = "%$search%";
    }

    if ($category) {
        $query .= " and c.name = :category";
        $params['category'] = $category;
    }

    $query .= " limit :limit offset :offset";
    $params['limit'] = $limit;
    $params['offset'] = $offset;

    $stmt = $pdo->prepare($query);
    foreach ($params as $key => $value) {
        if (in_array($key, ['limit', 'offset'])) {
            $stmt->bindValue($key, $value, PDO::PARAM_INT);
        } else {
            $stmt->bindValue($key, $value);
        }
    }
    $stmt->execute();

    $books = $stmt->fetchAll();

    $query = "select ba.book_id, a.name from book_author ba
                left join authors a on ba.author_id = a.id
                ";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $bookAuthors = $stmt->fetchAll();

    $bookByAuthors = [];
    foreach ($bookAuthors as $bookAuthor) {
        $bookByAuthors[$bookAuthor['book_id']][] = $bookAuthor['name'];
    }

    foreach ($books as $index => $book) {
        $books[$index]['authors'] = $bookByAuthors[$book['id']] ?? [];
    }

    return $books;
}

function getTotalBooks($search = '', $category = '')
{
    global $pdo;

    $query = "select count(b.id) as total from books b
                left join categories c on b.category_id = c.id
                where 1=1";
    $params = [];

    if ($search) {
        $query .= " and b.title like :search";
        $params['search'] = "%$search%";
    }

    if ($category) {
        $query .= " and c.name = :category";
        $params['category'] = $category;
    }

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    return (int) $stmt->fetchColumn();
}


function getBook($id)
{
    global $pdo;

    $query = "select id, title, isbn, year, stock, category_id, description from books where id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'id' => $id
    ]);

    $book = $stmt->fetch();

    if (!$book) {
        header("Location: ../books/index.php");
        exit;
    }

    $query = "select a.id from book_author ba
                left join authors a on ba.author_id = a.id
                where ba.book_id = :book_id
                ";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'book_id' => $book['id']
    ]);

    $authorIds = $stmt->fetchAll();

    $book['author_ids'] = array_column($authorIds, 'id');

    return $book;
}