import './frontPage.scss';
import './../../src-utilities/header';
import './../../src-utilities/footer';

document.addEventListener("DOMContentLoaded", function () {
    if (typeof Swiper !== 'undefined') {
        var swiper = new Swiper(".heroSwiper", {
            spaceBetween: 0,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }
});