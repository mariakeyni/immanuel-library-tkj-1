<?php 
require_once __DIR__ . "/../../repositories/category-repository.php";

$pageTitle = "Manajemen Kategori";
$pageSubtitle = "Kelola daftar kategori buku";

$search = $_GET['search'] ?? '';
$categories = getCategories($search);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?> - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/index.css">
</head>
<body>
  <div class="app-shell">
    <?php include __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php include __DIR__ . '/../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <div class="toolbar">
          <form method="GET" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama kategori..." value="<?= htmlspecialchars($search) ?>">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Kategori</a>
        </div>

        <div class="data-card">
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($categories)): ?>
                <?php foreach ($categories as $category): ?>
                  <tr>
                    <td>
                      <div class="cell-primary">
                        <span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg></span>
                        <?= htmlspecialchars($category['name'] ?? '') ?>
                      </div>
                    </td>
                    <td><?= htmlspecialchars($category['description'] ?? '-') ?></td>
                    <td><span class="badge badge-muted"><?= htmlspecialchars($category['total_books'] ?? 0) ?> buku</span></td>
                    <td>
                      <div class="cell-actions">
                        <a href="edit.php?id=<?= $category['id'] ?>" class="btn btn-outline btn-sm">Edit</a>
                        <form action="../../actions/categories/destroy.php" method="POST" style="display:inline;">
                          <input type="hidden" name="id" value="<?= $category['id']; ?>">
                          <button name="delete" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus kategori ini?')">Hapus</button>
                        </form>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="4" style="text-align: center; padding: 20px;">Data kategori tidak ditemukan.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="pagination">
          <span class="pagination-btn is-disabled">&lt;</span>
          <span class="pagination-btn is-disabled">&gt;</span>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
