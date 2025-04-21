document.addEventListener('DOMContentLoaded', () => {
  // Navbar hamburger menu
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('nav-links');

  hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });

  // Review modal functionality
  const openModalBtn = document.getElementById('openReviewModal');
  const modal = document.getElementById('reviewModal');
  const closeModalBtn = document.getElementById('closeModal');
  const reviewForm = document.getElementById('reviewForm');
  const reviewStars = document.querySelectorAll('#reviewStars i');
  const ratingInput = document.getElementById('ratingInput');
  const formError = document.getElementById('formError');
  const reviewsContainer = document.querySelector('.reviews-container');

  // Function to display reviews
  const displayReviews = () => {
    reviewsContainer.innerHTML = '';
    const reviews = JSON.parse(localStorage.getItem('reviews') || '[]');
    reviews.forEach(review => {
      const div = document.createElement('div');
      div.classList.add('review-item');
      div.innerHTML = `<h4>${review.coffeeName}</h4><p>Rating: ${review.rating}/5</p><p>${review.comment}</p>`;
      reviewsContainer.appendChild(div);
    });
  };

  // Initial display of reviews
  displayReviews();

  // Open modal
  openModalBtn.addEventListener('click', () => {
    modal.style.display = 'flex';
  });

  // Close modal
  closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    reviewForm.reset();
    formError.style.display = 'none';
    reviewStars.forEach(star => star.classList.remove('selected'));
  });

  // Handle star rating selection
  reviewStars.forEach(star => {
    star.addEventListener('click', () => {
      const rating = star.getAttribute('data-value');
      ratingInput.value = rating;
      reviewStars.forEach(s => {
        s.classList.toggle('selected', s.getAttribute('data-value') <= rating);
      });
    });
  });

  // Form submission
  reviewForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const coffeeName = document.getElementById('coffee_name').value;
    const rating = ratingInput.value;
    const comment = document.getElementById('comment').value;

    if (!coffeeName || !rating || !comment) {
      formError.textContent = 'Please fill out all fields.';
      formError.style.display = 'block';
      return;
    }

    // Save review to localStorage
    const reviews = JSON.parse(localStorage.getItem('reviews') || '[]');
    reviews.push({ coffeeName, rating, comment });
    localStorage.setItem('reviews', JSON.stringify(reviews));

    // Update displayed reviews
    displayReviews();

    // Reset and close modal
    reviewForm.reset();
    formError.style.display = 'none';
    reviewStars.forEach(star => star.classList.remove('selected'));
    modal.style.display = 'none';
  });
});