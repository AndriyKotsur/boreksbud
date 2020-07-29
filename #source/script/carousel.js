
let slideIndex = 1;
const slides = document.querySelectorAll(".slidesItem");

const showSlides = (index, items) => {
  if (items.length == 0) {
    return false;
  } else if (index > slides.length) {
    slideIndex = 1;
  } else if (index < 1) {
    slideIndex = items.length;
  }
  for (let i = 0; i < items.length; i++) {
    items[i].classList.remove('active');
  }
  
  items[slideIndex-1].classList.toggle('active');
};

showSlides(slideIndex, slides);

const prevBtn = document.querySelector(".prevBtn");
if (prevBtn) {
  prevBtn.addEventListener("click", function (e) {
    e.preventDefault();
    showSlides((slideIndex -= 1), slides);
  });
};

const nextBtn = document.querySelector(".nextBtn");
if (nextBtn) {
  nextBtn.addEventListener("click", function (e) {
    e.preventDefault();
    showSlides((slideIndex += 1), slides);
  });
};