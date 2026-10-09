<?php
<<<<<<< HEAD

require_once __DIR__ . '/../../repositories/book-repository.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $year = $_POST['year'] ?? '';
    $stock = $_POST['stock'] ?? 0;
    $category_id = $_POST['category_id'] ?? '';
    $description = $_POST['description'] ?? '';
    $author_ids = $_POST['author_ids'] ?? [];

    if ($id) {
        updateBook($id, [
            'title' => $title,
            'isbn' => $isbn,
            'year' => $year,
            'stock' => $stock,
            'category_id' => $category_id,
            'description' => $description,
            'author_ids' => $author_ids
        ]);
    }
}

header('Location: ../../pages/books/index.php');
exit;
=======
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_buku'])) {
  echo "Akses tidak valid.";
  return;
}
if (isset($_POST['id'], $_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $data = [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'isbn' => $_POST['isbn'],
    'year' => $_POST['year'],
    'stock' => $_POST['stock'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    'author_ids' => isset($_POST['author_ids']) ? $_POST['author_ids'] : [],
  ];
  echo "Perubahan buku berhasil diterima:<br>";
  echo "<pre>";
  print_r($data);
  echo "</pre>";
} else {
  echo "Data buku tidak lengkap.";
}
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
