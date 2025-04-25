<footer class="footer">
  <p>© 2025 BrewBuzz. جميع الحقوق محفوظة.</p>
</footer>
<script src="src/js/script.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const reviewsContainer = document.querySelector('.reviews-container');
  if (reviewsContainer) {
    const reviews = JSON.parse(localStorage.getItem('reviews') || '[]');
    reviews.forEach(review => {
      const div = document.createElement('div');
      div.className = 'review-card';
      const stars = Array(5).fill().map((_, i) => 
        `<i class="${i < review.rating ? 'fas' : 'far'} fa-star"></i>`
      ).join('');
      div.innerHTML = `
        <h4>${review.coffeeName}</h4>
        <p>${review.comment}</p>
        <div class="star-rating">${stars}</div>
        <p class="review-date">تم التقييم في: ${review.date}</p>
      `;
      reviewsContainer.appendChild(div);
    });
  }
});
</script>