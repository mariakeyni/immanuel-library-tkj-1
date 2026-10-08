<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

$pageTitle = "Detail Buku";
$pageSubtitle = "Informasi lengkap mengenai koleksi buku";

$id = $_GET['id'] ?? 1;
$book = getBook($id);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?> - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/show.css">
</head>
<body>
  
  <div class="app-shell">
    <?php include __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php include __DIR__ . '/../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <div class="detail-grid">
          <div class="detail-cover"><svg class="icon" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg></div>
          <div class="detail-card">
            <h1><?= htmlspecialchars($book['title'] ?? '') ?></h1>
            <p class="detail-meta">ISBN: <?= htmlspecialchars($book['isbn'] ?? '-') ?> &middot; Terbit <?= htmlspecialchars($book['year'] ?? '-') ?></p>

            <div class="detail-row">
              <div class="detail-label">Kategori</div>
              <div class="detail-value"><span class="badge badge-muted"><?= htmlspecialchars($book['category'] ?? '-') ?></span></div>
            </div>
            <div class="detail-row">
              <div class="detail-label">Penulis</div>
              <div class="detail-value">
                <div class="chip-list">
                  <?php if (!empty($book['authors']) && is_array($book['authors'])): ?>
                    <?php foreach ($book['authors'] as $authorName): ?>
                      <span class="chip"><?= htmlspecialchars($authorName) ?></span>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <span class="chip">-</span>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="detail-row">
              <div class="detail-label">Stok Tersedia</div>
              <div class="detail-value"><?= htmlspecialchars($book['stock'] ?? 0) ?> eksemplar</div>
            </div>
            <div class="detail-row">
              <div class="detail-label">Deskripsi</div>
              <div class="detail-value"><?= htmlspecialchars($book['description'] ?? '-') ?></div>
            </div>

            <div class="form-actions" style="border-top:none; padding-top:6px;">
              <a href="index.php" class="btn btn-outline">Kembali</a>
              <a href="edit.php?id=<?= $book['id'] ?? 1 ?>" class="btn btn-primary">Edit Buku</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>