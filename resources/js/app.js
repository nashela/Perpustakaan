  const slider = document.getElementById("slider");
  let currentIndex = 0;
  const totalSlides = slider.children.length;

  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  }, 3000);