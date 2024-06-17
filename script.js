let menue_btn = document.querySelector('.menue_btn');
let nav_bar = document.querySelector('.nav_bar');
let x_sign = document.querySelector('.x');
menue_btn.addEventListener('click', function(){
    nav_bar.classList.toggle('nav_active')
    menue_btn.classList.toggle('x_sign');
    menue_btn.classList.toggle('menue_btn');
    
})
document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slider img");
    const leftArrow = document.querySelector(".left-arrow");
    const rightArrow = document.querySelector(".right-arrow");
    const dots = document.querySelectorAll(".dot");
  
    let index = 0;
    let intervalId; // Variable to store interval ID
  
    function updateSlide() {
      slides.forEach((slide) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
      });
      dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
      });
    }
  
    function nextSlide() {
      index = (index + 1) % slides.length;
      updateSlide();
    }
  
    function prevSlide() {
      index = (index - 1 + slides.length) % slides.length;
      updateSlide();
    }
  
    function goToSlide(clickedIndex) {
      index = clickedIndex;
      updateSlide();
    }
  
    function startSlider() {
      intervalId = setInterval(nextSlide, 2000); // Change slide every 2 minutes (2000 milliseconds)
    }
  
    function stopSlider() {
      clearInterval(intervalId); // Clear the interval when needed
    }
  
    leftArrow.addEventListener("click", function () {
      prevSlide();
      stopSlider(); // Stop automatic sliding when user interacts with the slider
    });
  
    rightArrow.addEventListener("click", function () {
      nextSlide();
      stopSlider(); // Stop automatic sliding when user interacts with the slider
      console.log('done');
    });
  
    dots.forEach((dot, i) => {
      dot.addEventListener("click", () => {
        goToSlide(i);
        stopSlider(); // Stop automatic sliding when user interacts with the slider
      });
    });
  
    startSlider(); // Start automatic sliding when the page loads
  });
  