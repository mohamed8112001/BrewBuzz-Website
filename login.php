<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrewBuzz - Login</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <?php include 'nav.php'; ?>

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

  <?php include 'footer.php'; ?>
  <script src="script.js"></script>
  <script>
    // Mock Login
    const loginForm = document.getElementById('loginForm');
    const loginError = document.getElementById('loginError');

    loginForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (!email || !password) {
        loginError.textContent = 'All fields are required.';
        return;
      }

      const users = JSON.parse(localStorage.getItem('users') || '[]');
      const user = users.find(u => u.email === email && u.password === password);

      if (!user) {
        loginError.textContent = 'Invalid email or password.';
        return;
      }

      localStorage.setItem('user', JSON.stringify(user));
      loginError.textContent = '';
      alert('Login successful!');
      window.location.href = 'index.html';
    });
  </script>
</body>
</html>