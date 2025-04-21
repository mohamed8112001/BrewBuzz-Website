<header class="navbar">
  <div class="container">
    <button class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </button>
    <nav>
      <ul class="nav-links" id="nav-links">
        <li><a href="philosophy.php" class="<?php echo $current_page == 'philosophy.php' ? 'active' : ''; ?>">Philosophy</a></li>
        <li><a href="menu.php" class="<?php echo $current_page == 'menu.php' ? 'active' : ''; ?>">Menu</a></li>
        <li><a href="find-us.php" class="<?php echo $current_page == 'find-us.php' ? 'active' : ''; ?>">How to Find Us</a></li>
      </ul>
    </nav>
  </div>
</header>