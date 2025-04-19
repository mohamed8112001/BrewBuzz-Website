<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrewBuzz - Register</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <?php include 'nav.php'; ?>

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

  <?php include 'footer.php'; ?>
  <script src="script.js"></script>
  <script>
    // Register Form Submission
    const registerForm = document.getElementById('registerForm');
    const registerError = document.getElementById('registerError');

    registerForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (!name || !email || !password) {
        registerError.textContent = 'All fields are required.';
        return;
      }

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        registerError.textContent = 'Invalid email format.';
        return;
      }

      const users = JSON.parse(localStorage.getItem('users') || '[]');
      if (users.some(u => u.email === email)) {
        registerError.textContent = 'Email already registered.';
        return;
      }

      users.push({ name, email, password });
      localStorage.setItem('users', JSON.stringify(users));

      registerError.textContent = '';
      alert('Registration successful! Please log in.');
      window.location.href = 'login.html';
    });
  </script>
</body>
</html>