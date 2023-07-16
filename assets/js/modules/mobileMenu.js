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
  const tamanho = document.body.clientWidth
  const subMenu = document.querySelectorAll('.menu-item-has-children')

  subMenu.forEach((item) => {
    let span = document.createElement('span')
    span.classList.add('arrow-submenu')
    item.appendChild(span)

    let openMenu = item.querySelector('.arrow-submenu')
    let sub = item.querySelector('.sub-menu')
    openMenu.addEventListener('click', () => {
      sub.classList.toggle('active')
    })
  })


}
