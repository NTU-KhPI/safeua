"use strict"
const burgerIcon = document.querySelector(".menu__icon");
const navMenu = document.querySelector(".menu__body");

if(burgerIcon != null && navMenu != null){
    burgerIcon.addEventListener("click", function(e){
        navMenu.classList.toggle("_active");
        burgerIcon.classList.toggle("_change");
    });
}  
window.onclick = function(event) {
    if(burgerIcon != null && burgerIcon != null){
        if (!event.target.matches('.menu__icon') && !event.target.matches('.icon__lines') && navMenu.classList.contains('_active')) {
            navMenu.classList.remove('_active');
            burgerIcon.classList.remove("_change");
        }
    }
}