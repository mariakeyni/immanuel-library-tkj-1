<?php

require_once __DIR__ . '/../../repositories/user-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? 'member';

    if (!empty($name) && !empty($email) && !empty($password)) {
        createUser([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role
        ]);
    }

    header('Location: /pages/users/index.php');
    exit;
}