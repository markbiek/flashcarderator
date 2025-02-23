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

  // Add click handler for the "Try another one" button.
  document.querySelector(".card-button").addEventListener("click", () => {
    window.location.reload();
  });
});
