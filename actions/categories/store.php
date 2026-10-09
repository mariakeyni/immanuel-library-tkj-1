<?php

require_once __DIR__ . '/../../repositories/category-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';

    if (!empty($name)) {
        createCategory([
            'name' => $name,
            'description' => $description
        ]);
    }
}

header('Location: ../../pages/categories/index.php');
exit;