<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BrewBuzz - Top Coffee Picks</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="src/styles.css">
</head>
<body>
  <!-- Navigation -->
  <?php include("layout/header.php") ?>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
      <div class="hero-logo">BrewBuzz</div>
      <h1>Start your day with a Perfect Coffee</h1>
      <p class="hero-quote">"Coffee is the common man's gold, at an illude gold it brings to every person the feeling of luxury and nobility. - Dr. Nat Orite"</p>
      <a href="#coffee-picks" class="btn hero-btn">Buy Bytes</a>
    </div>
  </section>

  <!-- Featured Coffee Blends -->
  <section class="coffee-picks container">
    <h2>Top Coffee Picks</h2>
    <div class="coffee-grid">
      <div class="coffee-card">
        <img src="image2.jpg" alt="Classic Espresso">
        <h3>Classic Espresso</h3>
        <p>Bold and rich, perfect for a quick caffeine kick.</p>
        <div class="star-rating" data-rating="4">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
      <div class="coffee-card">
        <img src="image2.jpg" alt="Creamy Latte">
        <h3>Creamy Latte</h3>
        <p>Smooth and frothy, a coffee lover's delight.</p>
        <div class="star-rating" data-rating="5">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
      <div class="coffee-card">
        <img src="image2.jpg" alt="Cold Brew">
        <h3>Cold Brew</h3>
        <p>Refreshing and strong, ideal for warm days.</p>
        <div class="star-rating" data-rating="3">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div><br><br>
    <button class="btn" id="openReviewModal">Submit a Review</button>
    <div class="reviews-container"></div>
  </section>

  <!-- Review Modal -->
  <div class="modal" id="reviewModal">
    <div class="modal-content">
      <h3>Submit a Review</h3>
      <form id="reviewForm">
        <div class="form-group">
          <label for="coffee_name">Coffee Name</label>
          <input type="text" id="coffee_name" required>
        </div>
        <div class="form-group">
          <label>Rating</label>
          <div class="star-rating" id="reviewStars">
            <i class="fas fa-star" data-value="1"></i>
            <i class="fas fa-star" data-value="2"></i>
            <i class="fas fa-star" data-value="3"></i>
            <i class="fas fa-star" data-value="4"></i>
            <i class="fas fa-star" data-value="5"></i>
          </div>
          <input type="hidden" id="ratingInput" required>
        </div>
        <div class="form-group">
          <label for="comment">Comment</label>
          <textarea id="comment" required></textarea>
        </div>
        <p id="formError" class="error"></p>
        <button type="submit" class="btn">Submit</button>
        <button type="button" class="btn btn-secondary" id="closeModal">Cancel</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="layout/footer">
    <p>© 2025 BrewBuzz. All rights reserved.</p>
  </footer>

  <script src="src/script.js"></script>
</body>
</html>