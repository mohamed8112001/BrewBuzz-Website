<?php
session_start(['cookie_httponly' => true]);
require_once 'includes/config.php';
include 'layout/header.php';
?>

<section class="form-section container animate-fade-in">
  <div class="form-card">
    <h2>تسجيل دخول الأعضاء</h2>
    <h4>مرحبًا بك في موقعنا</h4>
    <form id="loginForm" class="modern-form" method="POST" action="login_handler.php">
      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
      <div class="form-group">
        <label for="email">البريد الإلكتروني</label>
        <input type="email" id="email" name="email" required aria-required="true" placeholder="أدخل بريدك الإلكتروني">
      </div>
      <div class="form-group password-group">
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" required aria-required="true" placeholder="أدخل كلمة المرور">
        <i class="fas fa-eye toggle-password" aria-label="تبديل رؤية كلمة المرور"></i>
      </div>
      <p id="loginError" class="error" role="alert"></p>
      <button type="submit" class="btn btn-circle animate-pulse">تسجيل الدخول</button>
      <p class="form-footer">ليس لديك حساب؟ <a href="register.php">سجل هنا</a></p>
    </form>
  </div>
</section>

<?php include('layout/footer.php'); ?>