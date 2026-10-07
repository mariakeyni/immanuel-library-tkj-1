<?php

require_once __DIR__ . '/../../repositories/user-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? 'member';

    if ($id && !empty($name) && !empty($email)) {
        $data = [
            'name' => $name,
            'email' => $email,
            'role' => $role
        ];

        if (!empty($_POST['password'])) {
            $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }

        updateUser($id, $data);
    }

    header('Location: ../../pages/users/');
    exit;
}