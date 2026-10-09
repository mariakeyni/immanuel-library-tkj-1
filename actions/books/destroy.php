<?php

require_once __DIR__ . '/../../repositories/book-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    deleteBook($id);
}

header('Location: ../../pages/books/index.php');
exit;