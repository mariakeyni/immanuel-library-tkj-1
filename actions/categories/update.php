<?php

require_once __DIR__ . '/../../repositories/category-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';

    if ($id && !empty($name)) {
        updateCategory($id, ['name' => $name]);
    }

    header('Location: /pages/categories/index.php');
    exit;
}