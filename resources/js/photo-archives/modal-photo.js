let images = document.querySelectorAll(".items__img");
let modalWindow = document.querySelector(".modal__images");
let modalItem= document.querySelector(".modal__item");
let modalImg = document.querySelector(".modal__img");
let modalCaption = document.querySelector(".modal__figcaption");

for (const img of images) {
    img.onclick = function(){
        modalWindow.style.display = "flex";
        modalImg.src = this.src;
        modalCaption.innerHTML = this.nextElementSibling.nextElementSibling.innerHTML;
    };
}

let imageClose = document.querySelector(".images__close");
imageClose.onclick = function(){
    modalWindow.style.display = "none";
};
