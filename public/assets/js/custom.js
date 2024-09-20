/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";


document.addEventListener('DOMContentLoaded', function () {
    const userSelect = document.querySelector('select[name="user_id"]');
    const emailInput = document.getElementById('email');
    const nameInput = document.getElementById('name');

    userSelect.addEventListener('change', function () {
        const selectedOption = userSelect.options[userSelect.selectedIndex];
        const email = selectedOption.getAttribute('data-email');
        const name = selectedOption.getAttribute('data-name');

        emailInput.value = email ? email : '';
        nameInput.value = name ? name : '';
    });
});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activeSlide", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " activeSlide";
}


// Auto Slide   if you need auto slide ,remove the commit "//"



//var slideIndex = 0;
//showSlides();

//function showSlides() {
    //var i;
  //  var slides = document.getElementsByClassName("mySlides");
   // for (i = 0; i < slides.length; i++) {
   //     slides[i].style.display = "none";
   // }
  //  slideIndex++;
   // if (slideIndex > slides.length) { slideIndex = 1 }
   // slides[slideIndex - 1].style.display = "block";
   // setTimeout(showSlides, 2000); // Change image every 2 seconds
//}


// Teachers Slider JS
/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
      600: {
        slidesPerView: 2,
      },
      968: {
        slidesPerView: 3,
      },
    },
  });
