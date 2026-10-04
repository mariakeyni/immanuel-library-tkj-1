<?php

require_once __DIR__ . '/../../repositories/book-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'] ?? '';
    $author_id = $_POST['author_id'] ?? '';
    $category_id = $_POST['category_id'] ?? '';
    $year = $_POST['year'] ?? '';
    $stock = $_POST['stock'] ?? 0;

    if ($id) {
        updateBook($id, [
            'title' => $title,
            'author_id' => $author_id,
            'category_id' => $category_id,
            'year' => $year,
            'stock' => $stock
        ]);
    }

    header('Location: /pages/books/index.php');
    exit;
}