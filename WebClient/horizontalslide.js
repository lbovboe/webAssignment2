const prev2 = document.querySelector(".prev2");
const next2 = document.querySelector(".next2");

const track = document.querySelector(".track");

let carouselWidth = document.querySelector(".carousel-container").offsetWidth;

window.addEventListener("resize", function() {
  carouselWidth = document.querySelector(".carousel-container").offsetWidth;
});

let index2 = 0;

next2.addEventListener("click", function(){
  index2++;
  prev2.classList.add("show");
  track.style.transform = `translateX(-${index2 * carouselWidth}px)`;

  if (track.offsetWidth - index2 * carouselWidth < carouselWidth) {
    next2.classList.add("hide");
  }
});

prev2.addEventListener("click", function(){
  index2--;
  next2.classList.remove("hide");
  if (index2 === 0) {
    prev2.classList.remove("show");
  }
  track.style.transform = `translateX(-${index2 * carouselWidth}px)`;
});
