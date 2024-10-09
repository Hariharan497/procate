const carouselImages = document.querySelector('.carousel-images');
const images = document.querySelectorAll('.carousel-images img');

let index = 0;

document.querySelector('.next-btn').addEventListener('click', () => {
  index++;
  if (index > images.length - 1) {
    index = 0;
  }
  updateCarousel();
});

document.querySelector('.prev-btn').addEventListener('click', () => {
  index--;
  if (index < 0) {
    index = images.length - 1;
  }
  updateCarousel();
});

function updateCarousel() {
  const width = images[0].clientWidth;
  carouselImages.style.transform = `translateX(${-index * width}px)`;
}

setInterval(automatic,3000)

function automatic(){
    index++;
  if (index > images.length - 1) {
    index = 0;
  }
  updateCarousel();
}

// Handle window resize to make the carousel responsive
window.addEventListener('resize', updateCarousel);
