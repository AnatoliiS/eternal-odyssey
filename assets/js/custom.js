// Additional JS for interactivity, including parallax effect
document.addEventListener("scroll", function() {
  const coverImage = document.querySelector(".wp-block-cover__image-background");
  if (coverImage) {
    const scrollPosition = window.scrollY;
    coverImage.style.transform = `translateY(${scrollPosition * 0.3}px)`;
  }
});
console.log("Eternal Odyssey loaded.");
