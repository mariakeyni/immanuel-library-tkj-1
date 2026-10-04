<?php

require_once __DIR__ . '/../../repositories/author-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $bio = $_POST['bio'] ?? '';

    if (!empty($name)) {
        createAuthor([
            'name' => $name,
            'bio' => $bio
        ]);
    }

    header('Location: /pages/authors/index.php');
    exit;
}