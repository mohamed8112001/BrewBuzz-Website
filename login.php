  <?php include 'layout/header.php'; ?>

  <!-- Login Section -->
  <section class="container" style="padding: 40px 0;">
    <h2>Member Login</h2>
    <form id="loginForm" style="max-width: 500px; margin: 20px auto;">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" required>
      </div>
      <p id="loginError" class="error"></p>
      <button type="submit" class="btn">Login</button>
    </form>
  </section>

  <?php include 'layout/footer.php'; ?>
