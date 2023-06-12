'use strict'

export default function () {

  const arrowTop = document.querySelector('.arrow-top')
  const altura = document.querySelector('body')

  window.addEventListener('scroll', () => {
    if (window.scrollY > (altura.clientHeight * 0.2)) {
      arrowTop.style.opacity = 1
    } else {
      arrowTop.style.opacity = 0
    }
  })

  arrowTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  })

}