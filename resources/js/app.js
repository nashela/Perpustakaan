document.addEventListener('DOMContentLoaded', () => {
  const scrollContainer = document.getElementById('book-scroll');
  let scrollAmount = 0;

  setInterval(() => {
    scrollAmount += 1;
    if (scrollContainer.scrollLeft >= scrollContainer.scrollWidth - scrollContainer.clientWidth) {
      scrollAmount = 0;
      scrollContainer.scrollLeft = 0;
    } else {
      scrollContainer.scrollLeft += 1;
    }
  }, 30); // kecepatan scroll, bisa kamu atur (semakin kecil = lebih cepat)
});
