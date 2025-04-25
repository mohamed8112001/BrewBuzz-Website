document.addEventListener('DOMContentLoaded', () => {
  // وظيفة تقييم النجوم (index.php)
  const reviewForm = document.getElementById('reviewForm');
  if (reviewForm) {
    const stars = document.querySelectorAll('#reviewStars i');
    const ratingInput = document.getElementById('ratingInput');
    const errorElement = document.getElementById('formError');

    const updateStars = (rating) => {
      stars.forEach(star => {
        const value = parseInt(star.getAttribute('data-value'));
        star.classList.toggle('fas', value <= rating);
        star.classList.toggle('far', value > rating);
        star.classList.toggle('filled', value <= rating);
        star.setAttribute('aria-checked', value <= rating ? 'true' : 'false');
      });
    };

    const resetStars = () => {
      updateStars(ratingInput.value ? parseInt(ratingInput.value) : 0);
    };

    stars.forEach(star => {
      star.addEventListener('click', () => {
        const rating = star.getAttribute('data-value');
        ratingInput.value = rating;
        updateStars(parseInt(rating));
        errorElement.textContent = '';
      });

      star.addEventListener('mouseover', () => {
        const rating = star.getAttribute('data-value');
        updateStars(parseInt(rating));
      });

      star.addEventListener('mouseout', resetStars);

      star.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          const rating = star.getAttribute('data-value');
          ratingInput.value = rating;
          updateStars(parseInt(rating));
          errorElement.textContent = '';
        }
      });
    });

    reviewForm.addEventListener('submit', (e) => {
      if (!ratingInput.value) {
        e.preventDefault();
        errorElement.textContent = 'يرجى اختيار تقييم.';
        return;
      }
      errorElement.textContent = '';
      // حفظ التقييم في localStorage (لأغراض العرض)
      const review = {
        coffeeName: document.getElementById('coffee_name').value,
        rating: parseInt(ratingInput.value),
        comment: document.getElementById('comment').value,
        date: new Date().toISOString().split('T')[0]
      };
      const reviews = JSON.parse(localStorage.getItem('reviews') || '[]');
      reviews.push(review);
      localStorage.setItem('reviews', JSON.stringify(reviews));
    });

    resetStars();
  }

  // التحقق من نموذج التواصل (contact.php)
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    const errorElement = document.getElementById('contactError');
    contactForm.addEventListener('submit', (e) => {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();
      if (!name || !email || !message) {
        e.preventDefault();
        errorElement.textContent = 'يرجى ملء جميع الحقول.';
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        e.preventDefault();
        errorElement.textContent = 'يرجى إدخال بريد إلكتروني صالح.';
      } else {
        errorElement.textContent = '';
      }
    });
  }

  // التحقق من نموذج تسجيل الدخول (login.php)
  const loginForm = document.getElementById('loginForm');
  if (loginForm) {
    const errorElement = document.getElementById('loginError');
    loginForm.addEventListener('submit', (e) => {
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      if (!email || !password) {
        e.preventDefault();
        errorElement.textContent = 'يرجى ملء جميع الحقول.';
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        e.preventDefault();
        errorElement.textContent = 'يرجى إدخال بريد إلكتروني صالح.';
      } else {
        errorElement.textContent = '';
      }
    });
  }

  // التحقق من نموذج التسجيل (register.php)
  const registerForm = document.getElementById('registerForm');
  if (registerForm) {
    const errorElement = document.getElementById('registerError');
    registerForm.addEventListener('submit', (e) => {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      if (!name || !email || !password) {
        e.preventDefault();
        errorElement.textContent = 'يرجى ملء جميع الحقول.';
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        e.preventDefault();
        errorElement.textContent = 'يرجى إدخال بريد إلكتروني صالح.';
      } else if (password.length < 6) {
        e.preventDefault();
        errorElement.textContent = 'كلمة المرور يجب أن تكون 6 أحرف على الأقل.';
      } else {
        errorElement.textContent = '';
      }
    });
  }

  // تبديل رؤية كلمة المرور (login.php, register.php)
  const togglePasswordIcons = document.querySelectorAll('.toggle-password');
  togglePasswordIcons.forEach(icon => {
    icon.addEventListener('click', () => {
      const input = icon.previousElementSibling;
      const isPassword = input.type === 'password';
      input.type = isPassword ? 'text' : 'password';
      icon.classList.toggle('fa-eye', isPassword);
      icon.classList.toggle('fa-eye-slash', !isPassword);
    });
  });

  // تبديل قائمة التنقل (الهامبرغر)
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');
  if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
      const isExpanded = hamburger.getAttribute('aria-expanded') === 'true';
      hamburger.setAttribute('aria-expanded', !isExpanded);
      navMenu.classList.toggle('active');
      hamburger.querySelectorAll('span').forEach((span, index) => {
        if (!isExpanded) {
          if (index === 0) span.style.transform = 'rotate(45deg) translate(6px, 6px)';
          if (index === 1) span.style.opacity = '0';
          if (index === 2) span.style.transform = 'rotate(-45deg) translate(8px, -8px)';
        } else {
          span.style.transform = 'none';
          span.style.opacity = '1';
        }
      });
    });
  }
});