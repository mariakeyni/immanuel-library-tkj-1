<?php
require_once __DIR__ . '/../../repositories/user-repository.php';
require_once __DIR__ . '/../../repositories/profile-repository.php';

$pageTitle = "Profil Saya";
$pageSubtitle = "Kelola informasi akun Anda";

$userId = $_SESSION['user_id'] ?? 1;

$user = getUser($userId);
$profile = getProfile($userId);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?> - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/profile/edit.css">
</head>
<body>
  <div class="app-shell">
    <?php include __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php include __DIR__ . '/../../components/admin/topbar.php'; ?>

      <div class="app-content">
        <form method="POST" action="../../actions/profile/update.php">
          <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['id'] ?? '') ?>">

          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Akun</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="<?= htmlspecialchars($user['name'] ?? '') ?>" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>" required>
              </div>
            </div>
            <div class="form-group">
              <label>Role</label>
              <input type="text" value="<?= ucfirst(htmlspecialchars($user['role'] ?? 'member')) ?>" disabled>
              <p class="form-help">Role hanya dapat diubah oleh Admin melalui menu Manajemen Pengguna.</p>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Data Profil</div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($profile['phone'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" id="address" name="address" value="<?= htmlspecialchars($profile['address'] ?? '') ?>">
            </div>
            <div class="form-group">
              <label for="bio">Bio Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= htmlspecialchars($profile['bio'] ?? '') ?></textarea>
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
