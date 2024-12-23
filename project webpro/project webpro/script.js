const slides = document.querySelectorAll(".slides img");
let currentSlideIndex = 0;

document.querySelector(".prev").addEventListener("click", slidePrev);
document.querySelector(".next").addEventListener("click", slideNext);

// Fungsi untuk menggeser slide ke kiri
function slidePrev() {
  slides[currentSlideIndex].style.display = "none";
  currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
  slides[currentSlideIndex].style.display = "block";
}

// Fungsi untuk menggeser slide ke kanan
function slideNext() {
  slides[currentSlideIndex].style.display = "none";
  currentSlideIndex = (currentSlideIndex + 1) % slides.length;
  slides[currentSlideIndex].style.display = "block";
}
