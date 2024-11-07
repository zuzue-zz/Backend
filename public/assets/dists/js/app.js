// JavaScript to toggle visibility of "Back to Top" button
const backToTopButton = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopButton.classList.remove('hidden');
        backToTopButton.classList.add('opacity-100');
    } else {
        backToTopButton.classList.add('hidden');
        backToTopButton.classList.remove('opacity-100');
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

    // Blur effect on navbar when scrolling
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 10) {
        navbar.classList.add('backdrop-blur', 'bg-opacity-80');
      } else {
        navbar.classList.remove('backdrop-blur', 'bg-opacity-80');
      }
    });

    // Carousel JavaScript
    const carousel = document.getElementById('carousel');
    const images = carousel.children.length;
    let currentIndex = 0;

    // Function to update carousel position
    function updateCarousel() {
      carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Auto-advance the carousel every 3 seconds
    let carouselInterval = setInterval(nextSlide, 3000);

    // Pause on hover
    carousel.addEventListener('mouseenter', () => clearInterval(carouselInterval));
    carousel.addEventListener('mouseleave', () => carouselInterval = setInterval(nextSlide, 3000));

    // Next and Previous slide functions
    function nextSlide() {
      currentIndex = (currentIndex + 1) % images;
      updateCarousel();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + images) % images;
      updateCarousel();
    }

    // Arrow button event listeners
    document.getElementById('next').addEventListener('click', nextSlide);
    document.getElementById('prev').addEventListener('click', prevSlide);
