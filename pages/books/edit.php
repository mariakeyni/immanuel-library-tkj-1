<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
  <?php
  require '../../repositories/book-repository.php';
  require '../../repositories/category-repository.php';
  require '../../repositories/author-repository.php';
  $book = getBook();
  $categories = getCategories();
  $authors = getAuthors();
  ?>
  <div class="app-shell">
  <?php require '../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php $pageTitle = 'Edit Buku'; $pageSubtitle = 'Perbarui data buku, kategori, dan penulis'; require '../../components/admin/topbar.php'; ?>

      <div class="app-content">
<<<<<<< HEAD
        <form method="post" action="../../actions/books/update.php">

          <input
            type="hidden"
            name="id"
            value="<?= htmlspecialchars($book['id'] ?? '') ?>"
          >

=======
        <form method="POST" action="../../actions/books/update.php">
          <input type="hidden" name="id" value="<?= $book['id'] ?>">
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
          <div class="form-card" style="margin-bottom:20px;">

            <div class="form-section-title">
              Data Buku
            </div>

            <div class="form-group">
              <label for="title">Judul Buku</label>
<<<<<<< HEAD

              <input
                type="text"
                id="title"
                name="title"
                value="<?= htmlspecialchars($book['title'] ?? '') ?>"
                required
              >
=======
              <input type="text" id="title" name="title" value="<?= $book['title'] ?>">
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
            </div>

            <div class="form-row">

              <div class="form-group">
                <label for="isbn">ISBN</label>
<<<<<<< HEAD

                <input
                  type="text"
                  id="isbn"
                  name="isbn"
                  value="<?= htmlspecialchars($book['isbn'] ?? '') ?>"
                  required
                >
=======
                <input type="text" id="isbn" name="isbn" value="<?= $book['isbn'] ?>">
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
              </div>

              <div class="form-group">
                <label for="year">Tahun Terbit</label>
<<<<<<< HEAD

                <input
                  type="number"
                  id="year"
                  name="year"
                  value="<?= htmlspecialchars($book['year'] ?? '') ?>"
                >
=======
                <input type="number" id="year" name="year" value="<?= $book['year'] ?>">
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
              </div>

            </div>

            <div class="form-row">

              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
<<<<<<< HEAD

                <input
                  type="number"
                  id="stock"
                  name="stock"
                  value="<?= htmlspecialchars($book['stock'] ?? '') ?>"
                >
=======
                <input type="number" id="stock" name="stock" value="<?= $book['stock'] ?>">
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
              </div>

              <div class="form-group">
                <label for="category_id">Kategori</label>
<<<<<<< HEAD

                <select
                  id="category_id"
                  name="category_id"
                  required
                >
                  <option value="">
                    -- Pilih Kategori --
                  </option>

                  <?php foreach ($categories as $category): ?>

                    <option
                      value="<?= htmlspecialchars($category['id']) ?>"
                      <?= (
                        (isset($book['category_id']) && $category['id'] == $book['category_id']) ||
                        (isset($book['category']) && $category['name'] === $book['category'])
                      ) ? 'selected' : '' ?>
                    >
                      <?= htmlspecialchars($category['name']) ?>
                    </option>

=======
                <select id="category_id" name="category_id">
                  <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>" <?= $category['id'] === $book['category_id'] ? 'selected' : '' ?>><?= $category['name'] ?></option>
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
                  <?php endforeach; ?>

                </select>
              </div>

            </div>

            <div class="form-group">
              <label for="description">Deskripsi</label>
<<<<<<< HEAD

              <textarea
                id="description"
                name="description"
                rows="3"
              ><?= htmlspecialchars($book['description'] ?? '') ?></textarea>
=======
              <textarea id="description" name="description" rows="3"><?= $book['description'] ?></textarea>
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
            </div>

          </div>

          <div class="form-card">

            <div class="form-section-title">
              Penulis Buku
            </div>

            <div class="form-group">

              <label>
                Pilih Penulis (bisa lebih dari satu)
              </label>

              <div class="checkbox-grid">

                <?php foreach ($authors as $author): ?>
<<<<<<< HEAD

                  <?php
                  $isAuthorSelected = in_array($author['id'], $book['author_ids'] ?? []) || in_array($author['name'], $book['authors'] ?? []);
                  ?>

                  <label class="checkbox-item">

                    <input
                      type="checkbox"
                      name="author_ids[]"
                      value="<?= htmlspecialchars($author['id']) ?>"
                      <?= $isAuthorSelected ? 'checked' : '' ?>
                    >

                    <?= htmlspecialchars($author['name']) ?>

=======
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= $author['id'] ?>" <?= in_array($author['id'], $book['author_ids']) ? 'checked' : '' ?>>
                    <?= $author['name'] ?>
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
                  </label>

                <?php endforeach; ?>

              </div>

            </div>

            <div class="form-actions">
<<<<<<< HEAD

              <a
                href="index.php"
                class="btn btn-outline"
              >
                Batal
              </a>

              <button
                name="update"
                type="submit"
                class="btn btn-primary"
              >
                Simpan Perubahan
              </button>

=======
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" name="ubah_buku" class="btn btn-primary">Simpan Perubahan</button>
>>>>>>> a3a7e32c3b8a8774427cc109924056c51539b491
            </div>

          </div>

        </form>
      </div>

    </main>
  </div>
</body>
</html>
