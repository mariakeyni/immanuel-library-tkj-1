<?php
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . "/../../middleware/auth.php";

if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim(htmlspecialchars($_POST['email']));
    $password = $_POST['password'];

    // Check if email exists
    $query = "select id, name, email, password, role from users where email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        sessionStart();
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role']
        ];

        header('Location: ' . BOOK_INDEX_URL);
        exit;
    } else {
        $_SESSION['errors'] = [
            'Login' => 'Email atau kata sandi salah'
        ];
        header('Location: ' . LOGIN_URL);
        exit;
    }
} else {
    header('Location: ' . LOGIN_URL);
    exit;
}
