<?php include('layout/header.php') ?>

<section class="form-section container animate-fade-in">
  <div class="form-card">
    <h2>تواصل معنا</h2>
    <form id="contactForm" class="modern-form" method="POST" action="contact_handler.php">
      <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
      <div class="form-group">
        <label for="name">الاسم</label>
        <input type="text" id="name" name="name" required aria-required="true" placeholder="أدخل اسمك">
      </div>
      <div class="form-group">
        <label for="email">البريد الإلكتروني</label>
        <input type="email" id="email" name="email" required aria-required="true" placeholder="أدخل بريدك الإلكتروني">
      </div>
      <div class="form-group">
        <label for="message">الرسالة</label>
        <textarea id="message" name="message" required aria-required="true" placeholder="أدخل رسالتك"></textarea>
      </div>
      <p id="contactError" class="error" role="alert"></p>
      <button type="submit" class="btn btn-circle animate-pulse">إرسال الرسالة</button>
    </form>
  </div>
</section>

<?php include('layout/footer.php') ?>