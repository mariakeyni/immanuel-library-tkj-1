<header class="app-topbar">
  <div class="page-title">
    <h1><?= $pageTitle ?></h1>
    <p><?= $pageSubtitle ?></p>
  </div>
  <div class="topbar-user">
    <?php sessionStart(); ?>
    <?php if (isLoggedIn()): ?>
      <?php $user = getAuthUser(); ?>
      <?php 
        $nameParts = explode(' ', $user['name']);
        $avatar = '';
        foreach ($nameParts as $part) {
          $avatar .= strtoupper(substr($part, 0, 1));
        }
      ?>
      <span class="avatar"><?= $avatar ?></span>
      <div>
        <?= htmlspecialchars($user['name']) ?><br>
        <span class="badge badge-member" style="margin-top:2px;"><?= htmlspecialchars(ucfirst($user['role'])) ?></span>
      </div>
    <?php else: ?>
      <span class="avatar">PD</span>
      <div>
        Tamu<br>
        <span class="badge badge-member" style="margin-top:2px;">-</span>
      </div>
    <?php endif ?>
  </div>
</header>
