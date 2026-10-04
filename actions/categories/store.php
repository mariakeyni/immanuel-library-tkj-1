<?php

require_once __DIR__ . '/../../repositories/category-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    if (!empty($name)) {
        createCategory(['name' => $name]);
    }

    header('Location: /pages/categories/index.php');
    exit;
}