<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/create.css">
</head>
<body>
  <div class="app-shell">
  <?php include __DIR__ . '/../../components/admin/sidebar.php'; ?>
    <main class="app-main">
    <header class="app-topbar">
      <div class="page-title">
        <h1>Tambah Kategori</h1>
        <p>Buat kategori baru untuk mengelompokkan buku</p>
      </div>
      <div class="topbar-user">
        <span class="avatar">BS</span>
        <div>
          Budi Santoso<br>
          <span class="badge badge-member" style="margin-top:2px;">Member</span>
        </div>
      </div>
    </header>

      <div class="app-content">
        <form method="POST" action="/actions/categories/store.php">
          <?php
          $pageTitle = "Tambah Kategori";
          $pageSubtitle = "Buat kategori baru untuk mengelompokkan buku";
          include __DIR__ . '/../../components/admin/topbar.php';
          ?>
            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button name="store" type="submit" class="btn btn-primary">Simpan Kategori</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
