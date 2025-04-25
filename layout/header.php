<?php
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
if (!isset($current_page)) {
  $current_page = basename($_SERVER['PHP_SELF']);
}
?>
<link rel="stylesheet" href="src/css/styles.css">
<header class="header">
  <div class="container">
    <a href="index.php" class="logo">BrewBuzz</a>
    <button class="hamburger" aria-label="Toggle navigation menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav-menu" aria-label="Main navigation">
      <ul>
        <li><a href="index.php" <?php echo $current_page === 'index.php' ? 'class="active"' : ''; ?>>Home</a></li>
        <li><a href="about.php" <?php echo $current_page === 'about.php' ? 'class="active"' : ''; ?>>About</a></li>
        <li><a href="contact.php" <?php echo $current_page === 'contact.php' ? 'class="active"' : ''; ?>>Contact</a></li>
        <li><a href="login.php" <?php echo $current_page === 'login.php' ? 'class="active"' : ''; ?>>Login</a></li>
        <li><a href="register.php" <?php echo $current_page === 'register.php' ? 'class="active"' : ''; ?>>Register</a></li>
      </ul>
    </nav>
  </div>
</header>