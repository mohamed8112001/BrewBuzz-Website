<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrewBuzz - About Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="src/css/styles.css">
</head>
<body>
  <!-- Navigation -->
  <?php include 'layout/header.php'; ?>

  <!-- About Section -->
  <section class="about container">
    <h2>Our Story</h2>
    <p>
      BrewBuzz was founded by a group of passionate coffee enthusiasts who wanted to create a community where coffee lovers could share their experiences, discover new blends, and learn the art of brewing. Our mission is to connect people through their love for quality coffee and foster a culture of appreciation for every sip.
    </p>
    <p>
      Whether you're a fan of bold espressos, creamy lattes, or refreshing cold brews, BrewBuzz is your hub to explore, review, and connect with others who share your passion.
    </p>
  </section>

  <!-- Footer -->
  <footer class="layout/footer">
    <p>© 2025 BrewBuzz. All rights reserved.</p>
  </footer>

  <script src="src/js/script.js"></script>
</body>
</html>