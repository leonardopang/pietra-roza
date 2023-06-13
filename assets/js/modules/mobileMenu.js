"use strict";

export default function () {
  const hamburguer = document.querySelector(".hamburguer-menu");
  const mobileMenu = document.querySelector(".menu-mobile");
  const closeMenu = document.querySelector(".close-menu");
  hamburguer.addEventListener("click", () => {
    mobileMenu.classList.toggle("active");
  });
  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
  });
}
