  <?php include 'layout/header.php'; ?>

  <!-- Register Section -->
  <section class="container" style="padding: 40px 0;">
    <h2>Create an Account</h2>
    <form id="registerForm" style="max-width: 500px; margin: 20px auto;">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" required>
      </div>
      <p id="registerError" class="error"></p>
      <button type="submit" class="btn">Register</button>
    </form>
  </section>

  <?php include 'layout/footer.php'; ?>