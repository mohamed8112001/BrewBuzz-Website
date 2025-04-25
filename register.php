<?php
require_once 'includes/config.php';
include 'layout/header.php';
?>

<section class="form-section container animate-fade-in">
  <div class="form-card">
    <h2>إنشاء حساب</h2>
    <form id="registerForm" class="modern-form" method="POST" action="register_handler.php">
      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
      <div class="form-group">
        <label for="name">الاسم</label>
        <input type="text" id="name" name="name" required aria-required="true" placeholder="أدخل اسمك">
      </div>
      <div class="form-group">
        <label for="email">البريد الإلكتروني</label>
        <input type="email" id="email" name="email" required aria-required="true" placeholder="أدخل بريدك الإلكتروني">
      </div>
      <div class="form-group password-group">
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name="password" required aria-required="true" placeholder="أدخل كلمة المرور">
        <i class="fas fa-eye toggle-password" aria-label="تبديل رؤية كلمة المرور"></i>
      </div>
      <p id="registerError" class="error" role="alert"></p>
      <button type="submit" class="btn btn-circle animate-pulse">تسجيل</button>
      <p class="form-footer">لديك حساب بالفعل؟ <a href="login.php">تسجيل الدخول هنا</a></p>
    </form>
  </div>
</section>

<?php include('layout/footer.php'); ?>