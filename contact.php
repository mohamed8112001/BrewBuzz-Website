<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrewBuzz - Contact Us</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar">
    <div class="container">
      <div class="logo">BrewBuzz</div>
      <button class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </div>
  </nav>

  <!-- Contact Section -->
  <section class="container" style="padding: 40px 0;">
    <h2>Connect With Us</h2>
    <form id="contactForm" style="max-width: 500px; margin: 20px auto;">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" required></textarea>
      </div>
      <p id="contactError" class="error"></p>
      <button type="submit" class="btn">Send Message</button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>© 2025 BrewBuzz. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
  <script>
    // Contact Form Submission
    const contactForm = document.getElementById('contactForm');
    const contactError = document.getElementById('contactError');

    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;

      if (!name || !email || !message) {
        contactError.textContent = 'All fields are required.';
        return;
      }

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        contactError.textContent = 'Invalid email format.';
        return;
      }

      // Store contact submission in localStorage
      const contacts = JSON.parse(localStorage.getItem('contacts') || '[]');
      contacts.push({ name, email, message, date: new Date().toISOString() });
      localStorage.setItem('contacts', JSON.stringify(contacts));

      contactError.textContent = '';
      alert('Message sent successfully!');
      contactForm.reset();
    });
  </script>
</body>
</html>