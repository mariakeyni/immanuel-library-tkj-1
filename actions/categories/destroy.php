<?php

require_once __DIR__ . '/../../repositories/category-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        deleteCategory($id);
    }

    header('Location: ../../pages/categories/index.php');
    exit;
}