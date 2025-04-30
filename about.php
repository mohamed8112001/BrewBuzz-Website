<?php
$current_page = basename($_SERVER['PHP_SELF']);
require_once 'includes/config.php'; // Include database connection

// Fetch reviews from the database
$query = "SELECT coffee_name, comment, rating, created_at FROM reviews ORDER BY created_at DESC";
$result = $connect->query($query);
?>

  <?php include 'layout/header.php'; ?>

  <section class="about-container">
    <h2>قصتنا</h2>
    <p>
      تأسست BrewBuzz من قبل مجموعة من عشاق القهوة المتحمسين الذين أرادوا إنشاء مجتمع يمكن لعشاق القهوة فيه مشاركة تجاربهم، واكتشاف خلطات جديدة، وتعلم فن التخمير. مهمتنا هي ربط الناس من خلال حبهم للقهوة عالية الجودة وتعزيز ثقافة التقدير لكل رشفة.
    </p>
    <p>
      سواء كنت من محبي الإسبريسو الجريء، أو اللاتيه الكريمي، أو القهوة الباردة المنعشة، فإن BrewBuzz هو مركزك لاستكشاف القهوة، تقييمها، والتواصل مع آخرين يشاركونك شغفك.
    </p>
  </section>

  <section class="reviews container animate-fade-in">
    <h2>تقييمات المجتمع</h2>
    <div class="reviews-container" id="reviewsContainer">
      <?php if ($result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
              <div class="review-card">
                  <h4><?php echo htmlspecialchars($row['coffee_name']); ?></h4>
                  <p><?php echo htmlspecialchars($row['comment']); ?></p>
                  <div class="star-rating">
                      <?php for ($i = 1; $i <= 5; $i++): ?>
                          <?php if ($i <= $row['rating']): ?>
                              <i class="fas fa-star"></i>
                          <?php else: ?>
                              <i class="far fa-star"></i>
                          <?php endif; ?>
                      <?php endfor; ?>
                  </div>
                  <p class="review-date">تم التقييم في: <?php echo $row['created_at']; ?></p>
              </div>
          <?php endwhile; ?>
      <?php else: ?>
          <p class="no-reviews">لا توجد تقييمات حالياً.</p>
      <?php endif; ?>
    </div>
  </section>

  <?php include 'layout/footer.php'; ?>
</body>
</html>