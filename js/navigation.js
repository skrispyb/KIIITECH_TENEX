// Menu bars toggle for mobile size
const menuBtn = document.getElementById("menu-button");
const closeBtn = document.getElementById("closeMenu");

menuBtn.addEventListener("click", function () {
  document.querySelector(".menu-container-main").classList.remove("hidden");
});

closeBtn.addEventListener("click", function () {
  document.querySelector(".menu-container-main").classList.add("hidden");
});

