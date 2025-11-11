document.addEventListener('DOMContentLoaded', () => {
  // Animasi fade-in untuk semua h2
  document.querySelectorAll('h2').forEach(el => {
    el.style.opacity = 0;
    setTimeout(() => {
      el.style.transition = 'opacity .9s ease';
      el.style.opacity = 1;
    }, 120);
  });

  // Efek soft pada galeri (contoh klik enlarge)
  document.querySelectorAll('#galeri-grid img').forEach(img => {
    img.addEventListener('click', () => {
      img.classList.toggle('enlarge');
    });
  });
});