//NAVEGATION MENU SCRIPTS
var hamburgerEl = document.querySelector(".hamburger");
var navMenuEls = document.querySelector(".nav-menu");
//console.log(hamburgerEl, navMenuEls);
hamburgerEl.addEventListener("click", () => {
    //console.log("clicked");
    navMenuEls.classList.toggle("active");
    hamburgerEl.classList.toggle("active");
});
/***
* ////// SLIDER SCRIPT
*/
const slider = document.getElementById("slides");
const buttonPrevious = document.querySelector(".slide-button-previous");
const buttonNext = document.querySelector(".slide-button-next");
const slideContainer = document.querySelector(".container-slides");
var slideActual = 0;
var totalSlides = slideContainer.children.length;
//console.log(totalSlides);
const proximoSlide = () => {
    slideActual = (slideActual + 1) % totalSlides;
    slider.style.setProperty("--slide-actual", slideActual.toString());
};
const slidePrecedente = () => {
    slideActual = (slideActual - 1) % totalSlides;
    if (slideActual < 0) {
        slideActual += totalSlides;
    }
    slider.style.setProperty("--slide-actual", slideActual.toString());
};
buttonPrevious.addEventListener("click", slidePrecedente);
buttonNext.addEventListener("click", proximoSlide);
/***
 * ////// NOVIDADES SCRIPT
 */
const newsBodyContainer = document.querySelector(".news-body");
const newsBodyBloco = document.querySelectorAll(".news-body-bloc");
const buttonPrecedente = document.querySelector("#btnPrecedente");
const buttonSeguinte = document.querySelector("#btnSeguinte");
//-----------Event listener of next button -------------------
buttonSeguinte.addEventListener("click", () => {
    //newsBodyContainer.scrollLeft += newsBodyContainer.offsetWidth;
    newsBodyContainer.scrollLeft += 310;
});
//-----------Event listener of precedent button -------------------
buttonPrecedente.addEventListener("click", () => {
    //newsBodyContainer.scrollLeft -= newsBodyContainer.offsetWidth;
    newsBodyContainer.scrollLeft -= 310;
});
//console.log(buttonSeguinte);


