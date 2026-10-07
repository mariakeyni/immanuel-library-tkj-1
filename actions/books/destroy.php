<?php

function getBooks($search = '') {
    $books = [
        [
            "id" => 1,
            "title" => "Bumi Manusia",
            "category_id" => 1,
            "category_name" => "Novel",
            "author_ids" => [1],
            "publisher" => "Hasta Mitra",
            "year" => 1980,
            "stock" => 10,
            "isbn" => "978-979-97312-3-0",
            "description" => "Kisah perjuangan Minke di era kolonial."
        ],
        [
            "id" => 2,
            "title" => "Laskar Pelangi",
            "category_id" => 1,
            "category_name" => "Novel",
            "author_ids" => [2],
            "publisher" => "Bentang Pustaka",
            "year" => 2005,
            "stock" => 5,
            "isbn" => "978-979-3062-79-2",
            "description" => "Kisah 10 anak laskar pelangi di Belitung."
        ]
    ];

    if ($search !== '') {
        $filtered = [];
        foreach ($books as $book) {
            if (stripos($book['title'], $search) !== false) {
                $filtered[] = $book;
            }
        }
        return $filtered;
    }

    return $books;
}

function getBook($id) {
    $books = getBooks();
    foreach ($books as $book) {
        if ($book['id'] == $id) {
            return $book;
        }
    }
    return null;
}

function createBook($data) {
    return true;
}

function updateBook($id, $data) {
    return true;
}

function deleteBook($id) {
    return true;
}