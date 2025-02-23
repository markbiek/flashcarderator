document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".card-spanish").forEach((card) => {
    card.addEventListener("click", function () {
      // Find the associated translation element within the same card container
      const translation = this.nextElementSibling;
      if (translation && translation.classList.contains("card-translation")) {
        translation.style.display = "block";
      }
    });
  });
});
