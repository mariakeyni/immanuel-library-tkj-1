<?php

session_start();

require_once __DIR__ . '/../../repositories/user-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id       = $_POST['id'] ?? null;
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $address  = $_POST['address'] ?? '';
    $bio      = $_POST['bio'] ?? '';

    if ($id && !empty($name) && !empty($email)) {
        $user = getUser($id);

        if ($user) {
            $finalPassword = !empty($password) ? $password : $user['password'];
            $role          = $user['role'];

            $updateData = [
                'name'     => $name,
                'email'    => $email,
                'password' => $finalPassword,
                'role'     => $role,
                'phone'    => $phone,
                'address'  => $address,
                'bio'      => $bio
            ];

            updateUser($id, $updateData);
        }
    }

    header('Location: ../../pages/profile/edit.php');
    exit;
}