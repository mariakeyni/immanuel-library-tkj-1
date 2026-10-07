<?php

require_once __DIR__ . '/../../repositories/author-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';
    $bio = $_POST['bio'] ?? '';

    if ($id && !empty($name)) {
        updateAuthor($id, [
            'name' => $name,
            'bio' => $bio
        ]);
    }

    header('Location: /pages/authors/index.php');
    exit;
}