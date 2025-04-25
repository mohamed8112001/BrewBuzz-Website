<?php
session_start(['cookie_httponly' => true]);
require_once 'includes/config.php';
include 'layout/header.php';
?>
<section class="form-section container animate-fade-in">
  <div class="form-card">
    <h2>Member Login</h2>
    <form id="loginForm" class="modern-form">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required aria-required="true" placeholder="Enter your email">
      </div>
      <div class="form-group password-group">
        <label for="password">Password</label>
        <input type="password" id="password" required aria-required="true" placeholder="Enter your password">
        <i class="fas fa-eye toggle-password" aria-label="Toggle password visibility"></i>
      </div>
      <p id="loginError" class="error" role="alert"></p>
      <button type="submit" class="btn animate-pulse">Login</button>
      <p class="form-footer">Don't have an account? <a href="register.php">Register here</a></p>
    </form>
  </div>
</section>
<?php include 'layout/footer.php'; ?>
<script src="src/js/script.js" defer></script>