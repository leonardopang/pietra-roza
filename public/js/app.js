(()=>{"use strict";var e={850:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(){var e=document.querySelector(".hero-banner");if(e){e.clientHeight;e.querySelector(".arrow-down-container a").addEventListener("click",(function(t){t.preventDefault();var r=e.clientHeight+92;window.scrollTo({top:r,behavior:"smooth"})}))}}},790:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(){var e=document.querySelector(".hamburguer-menu"),t=document.querySelector(".menu-mobile");e.addEventListener("click",(function(){t.classList.toggle("active")}))}},48:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(){document.querySelectorAll(".wpcf7").forEach((function(e){var t=e.querySelectorAll(".form-template .placeholder");e.addEventListener("wpcf7mailsent",(function(e){t.forEach((function(e){return e.classList.remove("focus")}))}),!1)}));var e=document.querySelectorAll(".form-template .placeholder");e.length>=1&&e.forEach((function(t,r){var o=t.querySelector(".wpcf7-form-control");o.addEventListener("focus",(function(){e[r].classList.add("focus")})),o.addEventListener("focusout",(function(){o.value||e[r].classList.remove("focus")}))}))}},157:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(){var e=document.querySelectorAll(".step-container");if(e[0]){var t=function(t){t.forEach((function(r){r.addEventListener("change",(function(){r.value.length>0&&!r.classList.contains("wpcf7-not-valid")?(l++,e[c].dataset.steps=l):(l<=0&&(l=0),l--),l>=t.length?o.removeAttribute("disabled"):o.setAttribute("disabled","disabled")}))}))},r=document.querySelector(".steps-itens"),o=(document.querySelector(".button-step-form"),document.querySelector(".button-form-steps"));e[0].classList.add("active"),o.setAttribute("disabled","disabled");var n=1;e.forEach((function(e,t){var o=document.createElement("span");o.classList.add("step--item"),e.classList.contains("active")&&o.classList.add("form-complete"),o.innerText=n++,r.appendChild(o)}));var c=0;setTimeout((function(){var r=document.querySelectorAll(".step--item");r.forEach((function(n,s){n.addEventListener("click",(function(){if(n.classList.contains("form-complete")&&s<c){c=s,e.forEach((function(e){return e.classList.remove("active")}));for(var i=s;i<e.length;i++)r[i].classList.remove("form-complete"),r[i].style.cursor="auto";if(0!=s)for(var u=s-1;u>=0;u--)r[u].style.cursor="pointer";l=0,e[s].classList.add("active"),n.classList.add("form-complete"),n.style.cursor="auto",o.innerText="Next",a=e[c].querySelectorAll("input"),e[c].dataset.steps==e.length&&o.removeAttribute("disabled"),t(a)}}))})),o.addEventListener("click",(function(n){if(e.forEach((function(e){return e.classList.remove("active")})),c<=e.length-1){n.preventDefault();for(var s=c;s>=0;s--)r[s].style.cursor="pointer";++c==e.length-1&&(o.innerText="Submit")}l=0,e[c].classList.add("active"),r[c].classList.add("form-complete"),o.setAttribute("disabled","disabled"),a=e[c].querySelectorAll("input"),e[c].dataset.steps==e.length&&o.removeAttribute("disabled"),t(a)}))}),2e3);var a=e[c].querySelectorAll("input"),l=0;t(a)}}},552:(e,t,r)=>{r.r(t)}},t={};function r(o){var n=t[o];if(void 0!==n)return n.exports;var c=t[o]={exports:{}};return e[o](c,c.exports,r),c.exports}r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{c(r(552));var e=c(r(157)),t=c(r(48)),o=c(r(790)),n=c(r(850));function c(e){return e&&e.__esModule?e:{default:e}}(0,e.default)(),(0,t.default)(),(0,o.default)(),(0,n.default)()})()})();
//# sourceMappingURL=app.js.map