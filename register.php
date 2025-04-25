<?php
require_once 'includes/config.php';
include 'layout/header.php';
?>
<section class="form-section container animate-fade-in">
  <div class="form-card">
    <h2>Create an Account</h2>
    <form id="registerForm" class="modern-form" method="POST" action="register_handler.php">
      <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
      <div class="form-group">
        <input type="text" id="name" name="name" required aria-required="true" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" required aria-required="true" placeholder="Email">
      </div>
      <div class="form-group password-group">
        <input type="password" id="password" name="password" required aria-required="true" placeholder="Password">
        <i class="fas fa-eye toggle-password" aria-label="Toggle password visibility"></i>
      </div>
      <p id="registerError" class="error" role="alert"></p>
      <button type="submit" class="btn btn-circle animate-pulse">Register</button>
      <p class="form-footer">Already have an account? <a href="login.php">Login here</a></p>
    </form>
  </div>
</section>
<?php include 'layout/footer.php'; ?>