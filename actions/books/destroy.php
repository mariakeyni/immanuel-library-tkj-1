<?php

require_once __DIR__ . '/../../repositories/book-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        deleteBook($id);
    }

    header('Location: /pages/books/index.php');
    exit;
}