<?php
<<<<<<< HEAD

require_once __DIR__ . '/../../repositories/book-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    deleteBook($id);
}

header('Location: ../../pages/books/index.php');
exit;
=======
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
