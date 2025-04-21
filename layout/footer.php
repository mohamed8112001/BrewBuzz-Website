<footer class="footer">
  <p>© 2025 BrewBuzz. All rights reserved.</p>
</footer>
<script src="src/script.js"></script>
<script>
const reviews = JSON.parse(localStorage.getItem('reviews') || '[]');
reviews.forEach(review => {
  const div = document.createElement('div');
  div.innerHTML = `<h4>${review.coffeeName}</h4><p>Rating: ${review.rating}/5</p><p>${review.comment}</p>`;
  document.querySelector('.coffee-picks').appendChild(div);
});
</script>