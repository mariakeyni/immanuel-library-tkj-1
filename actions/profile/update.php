<?php

session_start();

require_once __DIR__ . '/../../repositories/users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id       = $_POST['id'] ?? null;
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($id && !empty($name) && !empty($email)) {
        $user = find_user_by_id($id);

        if ($user) {
            $finalPassword = !empty($password) ? $password : $user['password'];
            $role          = $user['role'];

            update_user($id, $name, $email, $finalPassword, $role);
        }
    }

    header('Location: /pages/profile/edit.php');
     exit;
}