<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

  <!-- التنقل -->
  <?php include 'layout/header.php'; ?>

  <!-- قسم عنا -->
  <section class="about-container">
    <h2>قصتنا</h2>
    <p>
      تأسست BrewBuzz من قبل مجموعة من عشاق القهوة المتحمسين الذين أرادوا إنشاء مجتمع يمكن لعشاق القهوة فيه مشاركة تجاربهم، واكتشاف خلطات جديدة، وتعلم فن التخمير. مهمتنا هي ربط الناس من خلال حبهم للقهوة عالية الجودة وتعزيز ثقافة التقدير لكل رشفة.
    </p>
    <p>
      سواء كنت من محبي الإسبريسو الجريء، أو اللاتيه الكريمي، أو القهوة الباردة المنعشة، فإن BrewBuzz هو مركزك لاستكشاف القهوة، تقييمها، والتواصل مع آخرين يشاركونك شغفك.
    </p>
  </section>

  <!-- قسم التقييمات -->
  <section class="reviews container animate-fade-in">
    <h2>تقييمات المجتمع</h2>
    <div class="reviews-container" id="reviewsContainer">
      <div class="review-card">
        <h4>إسبريسو كلاسيكي</h4>
        <p>جريء وغني، مثالي لجرعة كافيين سريعة.</p>
        <div class="star-rating">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="review-date">تم التقييم في: 2023-10-01</p>
      </div>
      <div class="review-card">
        <h4>لاتيه كريمي</h4>
        <p>ناعم ورغوي، متعة لعشاق القهوة.</p>
        <div class="star-rating">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="review-date">تم التقييم في: 2023-10-02</p>
      </div>
    </div>
  </section>

  <!-- الفوتر -->
  <?php include 'layout/footer.php'; ?>
</body>
</html>