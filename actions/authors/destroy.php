<?php

require_once __DIR__ . '/../../repositories/author-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        deleteAuthor($id);
    }

    header('Location: /pages/authors/index.php');
    exit;
}