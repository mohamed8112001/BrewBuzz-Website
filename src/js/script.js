document.addEventListener('DOMContentLoaded', () => {
  // Hamburger Menu
  const hamburger = document.querySelector('.hamburger');
  const navMenu = document.querySelector('.nav-menu');
  
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
    const isExpanded = hamburger.getAttribute('aria-expanded') === 'true';
    hamburger.setAttribute('aria-expanded', !isExpanded);
  });

  // Close menu when clicking a link
  document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      hamburger.setAttribute('aria-expanded', 'false');
    });
  });

  // Password Toggle
  document.querySelectorAll('.toggle-password').forEach(toggle => {
    toggle.addEventListener('click', () => {
      const input = toggle.previousElementSibling;
      const isPassword = input.type === 'password';
      input.type = isPassword ? 'text' : 'password';
      toggle.classList.toggle('fa-eye', isPassword);
      toggle.classList.toggle('fa-eye-slash', !isPassword);
    });
  });

  // Review Modal
  const reviewModal = document.getElementById('reviewModal');
  const openReviewModal = document.getElementById('openReviewModal');
  const closeModal = document.getElementById('closeModal');
  const reviewForm = document.getElementById('reviewForm');
  const formError = document.getElementById('formError');
  const reviewStars = document.querySelectorAll('#reviewStars i');
  const ratingInput = document.getElementById('ratingInput');

  // Open modal
  openReviewModal.addEventListener('click', () => {
    reviewModal.style.display = 'flex';
    reviewModal.setAttribute('aria-hidden', 'false');
  });

  // Close modal
  closeModal.addEventListener('click', () => {
    reviewModal.style.display = 'none';
    reviewModal.setAttribute('aria-hidden', 'true');
    reviewForm.reset();
    formError.textContent = '';
  });

  // Star rating selection
  reviewStars.forEach(star => {
    star.addEventListener('click', () => {
      const rating = star.getAttribute('data-value');
      ratingInput.value = rating;
      reviewStars.forEach(s => {
        s.classList.toggle('fas', s.getAttribute('data-value') <= rating);
        s.classList.toggle('far', s.getAttribute('data-value') > rating);
      });
    });
  });

  // Review form submission
  reviewForm.addEventListener('submit', async e => {
    e.preventDefault();
    const coffeeName = document.getElementById('coffee_name').value.trim();
    const rating = ratingInput.value;
    const comment = document.getElementById('comment').value.trim();
    const csrfToken = reviewForm.getAttribute('data-csrf');

    if (!coffeeName || !rating || !comment) {
      formError.textContent = 'All fields are required.';
      return;
    }

    try {
      const response = await fetch('/submit_review.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ coffee_name: coffeeName, rating, comment, csrf_token: csrfToken }),
      });

      const result = await response.json();
      if (result.success) {
        reviewModal.style.display = 'none';
        reviewModal.setAttribute('aria-hidden', 'true');
        reviewForm.reset();
        formError.textContent = '';
        loadReviews();
      } else {
        formError.textContent = result.message || 'Failed to submit review.';
      }
    } catch (error) {
      formError.textContent = 'An error occurred. Please try again.';
    }
  });

  // Load reviews dynamically
  async function loadReviews() {
    const reviewsContainer = document.getElementById('reviewsContainer');
    try {
      const response = await fetch('/get_reviews.php');
      const reviews = await response.json();
      reviewsContainer.innerHTML = reviews.map(review => `
        <div class="review animate-slide-up">
          <h4>${review.coffee_name}</h4>
          <div class="star-rating" data-rating="${review.rating}">
            ${[...Array(5)].map((_, i) => `<i class="${i < review.rating ? 'fas' : 'far'} fa-star"></i>`).join('')}
          </div>
          <p>${review.comment}</p>
          <small>${new Date(review.created_at).toLocaleDateString()}</small>
        </div>
      `).join('');
    } catch (error) {
      reviewsContainer.innerHTML = '<p>Failed to load reviews.</p>';
    }
  }

  loadReviews();
});