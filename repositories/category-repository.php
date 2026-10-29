<?php
require_once __DIR__ . "/../config/database.php";

function getCategories()
{
    global $pdo;

    $query = "select c.*, count(b.id) as total_books from categories c
              left join books b on b.category_id = c.id
              group by c.id
              order by c.name";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $categories = $stmt->fetchAll();

    return $categories;
}

function getCategory()
{
    $category = [
        "id" => 1,
        "name" => "Fiksi",
        "description" => "Novel dan cerita rekaan",
    ];

    return $category;
}