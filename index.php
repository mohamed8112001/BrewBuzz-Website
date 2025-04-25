<?php
session_start(['cookie_httponly' => true]);
$current_page = basename($_SERVER['PHP_SELF']);
require_once 'includes/config.php';
?>

<body>
  <!-- Navigation -->
  <?php include 'layout/header.php'; ?>

  <!-- Hero Section -->
  <section class="hero animate-fade-in" aria-label="Hero section">
    <div class="hero-overlay"></div>
    <div class="hero-content container animate-slide-up">
      <div class="hero-logo">BrewBuzz</div>
      <h1>Start Your Day with a Perfect Coffee</h1>
      <p class="hero-quote">"Coffee is the common man's gold, and like gold, it brings to every person the feeling of luxury and nobility." - Dr. Nat Orite</p>
      <a href="#coffee-picks" class="btn hero-btn" aria-label="Explore coffee picks">Discover Our Blends</a>
    </div>
  </section>

  <!-- Why BrewBuzz Section -->
  <section class="why-brewbuzz container animate-fade-in">
    <h2>Why BrewBuzz?</h2>
    <div class="why-grid">
      <div class="why-card">
        <i class="fas fa-coffee"></i>
        <h3>Premium Blends</h3>
        <p>Curated coffee blends sourced from the finest beans worldwide.</p>
      </div>
      <div class="why-card">
        <i class="fas fa-users"></i>
        <h3>Vibrant Community</h3>
        <p>Join coffee lovers to share reviews and brewing tips.</p>
      </div>
      <div class="why-card">
        <i class="fas fa-leaf"></i>
        <h3>Sustainable Practices</h3>
        <p>Ethically sourced coffee with eco-friendly packaging.</p>
      </div>
    </div>
  </section>

  <!-- Featured Coffee Blends -->
  <section class="coffee-picks container animate-fade-in" id="coffee-picks">
    <h2>Top Coffee Picks</h2>
    <div class="coffee-grid">
      <div class="coffee-card animate-slide-up">
        <img src="src/images/img3.webp" alt="Classic Espresso" loading="lazy">
        <h3>Classic Espresso</h3>
        <p>Bold and rich, perfect for a quick caffeine kick.</p>
        <div class="star-rating" data-rating="4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
      </div>
      <div class="coffee-card animate-slide-up">
        <img src="src/images/image2.jpg" alt="Creamy Latte" loading="lazy">
        <h3>Creamy Latte</h3>
        <p>Smooth and frothy, a coffee lover's delight.</p>
        <div class="star-rating" data-rating="5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
      </div>
      <div class="coffee-card animate-slide-up">
        <img src="src/images/berw.jpeg" alt="Cold Brew" loading="lazy">
        <h3>Cold Brew</h3>
        <p>Refreshing and strong, ideal for warm days.</p>
        <div class="star-rating" data-rating="3">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Review Form Section -->
  <section class="form-section container animate-fade-in">
    <div class="form-card">
      <h2>Share Your Review</h2>
      <?php
      if (isset($_SESSION['success'])) {
          echo '<p class="success">' . $_SESSION['success'] . '</p>';
          unset($_SESSION['success']);
      }
      if (isset($_SESSION['error'])) {
          echo '<p class="error">' . $_SESSION['error'] . '</p>';
          unset($_SESSION['error']);
      }
      ?>
      <form id="reviewForm" class="modern-form" method="POST" action="submit_review.php">
        <div class="form-group">
          <input type="text" id="coffee_name" name="coffee_name" required aria-required="true" placeholder="Coffee Name">
        </div>
        <div class="form-group">
          <label>Rating</label>
          <div class="star-rating" id="reviewStars">
            <i class="fas fa-star" data-value="1" role="button" aria-label="1 star"></i>
            <i class="fas fa-star" data-value="2" role="button" aria-label="2 stars"></i>
            <i class="fas fa-star" data-value="3" role="button" aria-label="3 stars"></i>
            <i class="fas fa-star" data-value="4" role="button" aria-label="4 stars"></i>
            <i class="fas fa-star" data-value="5" role="button" aria-label="5 stars"></i>
          </div>
          <input type="hidden" id="ratingInput" name="rating" required aria-required="true">
        </div>
        <div class="form-group">
          <textarea id="comment" name="comment" required aria-required="true" placeholder="Your Comment"></textarea>
        </div>
        <p id="formError" class="error" role="alert"></p>
        <button type="submit" class="btn btn-circle animate-pulse">Submit Review</button>
      </form>
    </div>
  </section>

  <!-- Reviews Section -->
  <section class="reviews container animate-fade-in">
    <h2>Community Reviews</h2>
    <div class="reviews-container" id="reviewsContainer">
      <!-- Example Review Card -->
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
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="review-date">Reviewed on: 2023-10-02</p>
      </div>
      <div class="review-card">
        <h4>Cold Brew</h4>
        <p>Refreshing and strong, ideal for warm days.</p>
        <div class="star-rating">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="review-date">Reviewed on: 2023-10-03</p>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials container animate-fade-in">
    <h2>What Our Customers Say</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <p>"BrewBuzz's espresso is a game-changer! Perfectly balanced and bold."</p>
        <h4>- Sarah M.</h4>
      </div>
      <div class="testimonial-card">
        <p>"The community here is amazing. I love sharing my coffee recipes!"</p>
        <h4>- Ahmed K.</h4>
      </div>
      <div class="testimonial-card">
        <p>"Cold brew is my go-to, and BrewBuzz nails it every time."</p>
        <h4>- Emily R.</h4>
      </div>
    </div>
  </section>

  <!-- Join Community Section -->
  <section class="join-community container animate-fade-in">
    <h2>Join Our Coffee Community</h2>
    <p>Sign up to share your reviews, discover new blends, and connect with fellow coffee enthusiasts.</p>
    <a href="register.php" class="btn btn-circle" aria-label="Join now">Join Now</a>
  </section>

  <!-- Footer -->
  <?php include 'layout/footer.php'; ?>
</body>
</html>