<?php include 'layout/header.php'; ?>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
require_once 'includes/config.php';

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
  }
?>
  <!-- التنقل -->

  <!-- قسم البطل -->
  <section class="hero animate-fade-in" aria-label="قسم البطل">
    <div class="hero-overlay"></div>
    <div class="hero-content container animate-slide-up">
      <div class="hero-logo">BrewBuzz</div>
      <h1>ابدأ يومك بقهوة مثالية</h1>
      <p class="hero-quote">"القهوة هي ذهب الرجل العادي، ومثل الذهب، فإنها تجلب لكل شخص شعورًا بالرفاهية والنبل." - د. نات أورايت</p>
      <a href="#coffee-picks" class="btn hero-btn" aria-label="استكشف اختيارات القهوة">اكتشف خلطاتنا</a>
    </div>
  </section>

  <!-- قسم لماذا BrewBuzz -->
  <section class="why-brewbuzz container animate-fade-in">
    <h2>لماذا BrewBuzz؟</h2>
    <div class="why-grid">
      <div class="why-card">
        <i class="fas fa-coffee"></i>
        <h3>خلطات مميزة</h3>
        <p>خلطات قهوة مختارة بعناية من أجود الحبوب في العالم.</p>
      </div>
      <div class="why-card">
        <i class="fas fa-users"></i>
        <h3>مجتمع نابض بالحياة</h3>
        <p>انضم إلى عشاق القهوة لمشاركة التقييمات ونصائح التخمير.</p>
      </div>
      <div class="why-card">
        <i class="fas fa-leaf"></i>
        <h3>ممارسات مستدامة</h3>
        <p>قهوة من مصادر أخلاقية مع تغليف صديق للبيئة.</p>
      </div>
    </div>
  </section>

  <!-- اختيارات القهوة المميزة -->
  <section class="coffee-picks container animate-fade-in" id="coffee-picks">
    <h2>أفضل اختيارات القهوة</h2>
    <div class="coffee-grid">
      <div class="coffee-card animate-slide-up">
        <img src="src/images/img3.webp" alt="إسبريسو كلاسيكي" loading="lazy">
        <h3>إسبريسو كلاسيكي</h3>
        <p>جريء وغني، مثالي لجرعة كافيين سريعة.</p>
        <div class="star-rating" data-rating="4">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
        </div>
      </div>
      <div class="coffee-card animate-slide-up">
        <img src="src/images/image2.jpg" alt="لاتيه كريمي" loading="lazy">
        <h3>لاتيه كريمي</h3>
        <p>ناعم ورغوي، متعة لعشاق القهوة.</p>
        <div class="star-rating" data-rating="5">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
      </div>
      <div class="coffee-card animate-slide-up">
        <img src="src/images/berw.jpeg" alt="قهوة باردة" loading="lazy">
        <h3>قهوة باردة</h3>
        <p>منعشة وقوية، مثالية للأيام الدافئة.</p>
        <div class="star-rating" data-rating="3">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- قسم نموذج التقييم -->
  <section class="form-section container animate-fade-in">
    <div class="form-card">
      <h2>شارك تقييمك</h2>
      <form id="reviewForm" class="modern-form" method="POST" action="submit_review.php">
        <div class="form-group">
          <label for="coffee_name">اسم القهوة</label>
          <input type="text" id="coffee_name" name="coffee_name" required aria-required="true" placeholder="أدخل اسم القهوة">
        </div>
        <div class="form-group">
          <label for="reviewStars">التقييم</label>
          <div class="star-rating" id="reviewStars" role="radiogroup" aria-label="اختر تقييم من 1 إلى 5 نجوم">
            <i class="far fa-star" data-value="1" role="radio" aria-checked="false" aria-label="نجمة واحدة" tabindex="0"></i>
            <i class="far fa-star" data-value="2" role="radio" aria-checked="false" aria-label="نجمتان" tabindex="0"></i>
            <i class="far fa-star" data-value="3" role="radio" aria-checked="false" aria-label="ثلاث نجوم" tabindex="0"></i>
            <i class="far fa-star" data-value="4" role="radio" aria-checked="false" aria-label="أربع نجوم" tabindex="0"></i>
            <i class="far fa-star" data-value="5" role="radio" aria-checked="false" aria-label="خمس نجوم" tabindex="0"></i>
          </div>
          <input type="hidden" id="ratingInput" name="rating" required aria-required="true">
        </div>
        <div class="form-group">
          <label for="comment">تعليقك</label>
          <textarea id="comment" name="comment" required aria-required="true" placeholder="أدخل تعليقك"></textarea>
        </div>
        <p id="formError" class="error" role="alert"></p>
        <button type="submit" class="btn btn-circle animate-pulse">إرسال التقييم</button>
      </form>
    </div>
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
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="review-date">تم التقييم في: 2023-10-02</p>
      </div>
      <div class="review-card">
        <h4>قهوة باردة</h4>
        <p>منعشة وقوية، مثالية للأيام الدافئة.</p>
        <div class="star-rating">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </div>
        <p class="review-date">تم التقييم في: 2023-10-03</p>
      </div>
    </div>
  </section>

  <!-- قسم الشهادات -->
  <section class="testimonials container animate-fade-in">
    <h2>ماذا يقول عملاؤنا</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <p>"إسبريسو BrewBuzz يغير قواعد اللعبة! متوازن وجريء بشكل مثالي."</p>
        <h4>- سارة م.</h4>
      </div>
      <div class="testimonial-card">
        <p>"المجتمع هنا رائع. أحب مشاركة وصفات القهوة الخاصة بي!"</p>
        <h4>- أحمد ك.</h4>
      </div>
      <div class="testimonial-card">
        <p>"القهوة الباردة هي خياري المفضل، وBrewBuzz يتقنها في كل مرة."</p>
        <h4>- إميلي ر.</h4>
      </div>
    </div>
  </section>

  <!-- قسم الانضمام للمجتمع -->
  <section class="join-community container animate-fade-in">
    <h2>انضم إلى مجتمع القهوة الخاص بنا</h2>
    <p>سجل لمشاركة تقييماتك، واكتشاف خلطات جديدة، والتواصل مع عشاق القهوة.</p>
    <a href="register.php" class="btn btn-circle" aria-label="انضم الآن">انضم الآن</a>
  </section>

  <!-- الفوتر -->
  <?php include 'layout/footer.php'; ?>
