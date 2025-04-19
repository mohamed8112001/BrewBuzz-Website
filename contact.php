<?php include('layout/header.php') ?>

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

  <?php include('layout/footer.php') ?>