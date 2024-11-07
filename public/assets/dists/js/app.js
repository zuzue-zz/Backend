// Automatic scrolling (optional)
const carouselElement = document.querySelector('#demo');
const carousel = new bootstrap.Carousel(carouselElement, {
    interval: 3000, // Change slide every 3 seconds
    wrap: true // Wrap around to the beginning
});