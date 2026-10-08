<?php
require_once __DIR__ . '/../../repositories/category-repository.php';

$pageTitle = "Edit Kategori";
$pageSubtitle = "Ubah informasi data kategori";

$id = $_GET['id'] ?? null;
$category = $id ? getCategory($id) : null;

if (!$category) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?> - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/edit.css">
</head>
<body>
  <div class="app-shell">
    <?php include __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php include __DIR__ . '/../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <form method="POST" action="../../actions/categories/update.php">
          <input type="hidden" name="id" value="<?= htmlspecialchars($category['id'] ?? '') ?>">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" value="<?= htmlspecialchars($category['name'] ?? '') ?>" required>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= htmlspecialchars($category['description'] ?? '') ?></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button name="update" type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>