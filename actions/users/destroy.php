<?php

require_once __DIR__ . '/../../repositories/user-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if ($id) {
        deleteUser($id);
    }

    header('Location: ../../pages/users/');
    exit;
}