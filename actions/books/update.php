<?php

require_once __DIR__ . '/../../repositories/book-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $year = $_POST['year'] ?? '';
    $stock = $_POST['stock'] ?? 0;
    $category_id = $_POST['category_id'] ?? '';
    $description = $_POST['description'] ?? '';
    $author_ids = $_POST['author_ids'] ?? [];

    if ($id) {
        updateBook($id, [
            'title' => $title,
            'isbn' => $isbn,
            'year' => $year,
            'stock' => $stock,
            'category_id' => $category_id,
            'description' => $description,
            'author_ids' => $author_ids
        ]);
    }
}

header('Location: ../../pages/books/index.php');
exit;