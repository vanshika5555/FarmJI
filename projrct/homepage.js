// script.js

document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelector('.slides');
  const slideCount = document.querySelectorAll('.slide').length;
  let index = 0;

  function showSlide(n) {
      if (n >= slideCount) index = 0;
      else if (n < 0) index = slideCount - 1;
      else index = n;
      
      slides.style.transform = `translateX(${-index * 100}%)`;
  }

  document.querySelector('.next').addEventListener('click', function() {
      showSlide(index + 1);
  });

  document.querySelector('.prev').addEventListener('click', function() {
      showSlide(index - 1);
  });

  // Optional: auto-slide functionality
  setInterval(function() {
      showSlide(index + 1);
  }, 3000); // Change slide every 3 seconds
});
