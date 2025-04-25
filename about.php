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
  <section class="about-container">
    <h2>Our Story</h2>
    <p>
      BrewBuzz was founded by a group of passionate coffee enthusiasts who wanted to create a community where coffee lovers could share their experiences, discover new blends, and learn the art of brewing. Our mission is to connect people through their love for quality coffee and foster a culture of appreciation for every sip.
    </p>
    <p>
      Whether you're a fan of bold espressos, creamy lattes, or refreshing cold brews, BrewBuzz is your hub to explore, review, and connect with others who share your passion.
    </p>
  </section>

  <!-- Reviews Section -->
  <section class="reviews container animate-fade-in">
    <h2>Community Reviews</h2>
    <div class="reviews-container" id="reviewsContainer">
      <div class="review-card">
        <h4>Classic Espresso</h4>
        <p>Bold and rich, perfect for a quick caffeine kick.</p>
        <div class="star-rating">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="review-date">Reviewed on: 2023-10-01</p>
      </div>
      <div class="review-card">
        <h4>Creamy Latte</h4>
        <p>Smooth and frothy, a coffee lover's delight.</p>
        <div class="star-rating">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="review-date">Reviewed on: 2023-10-02</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="layout/footer">
    <p>© 2025 BrewBuzz. All rights reserved.</p>
  </footer>

  <script src="src/js/script.js"></script>
</body>
</html>