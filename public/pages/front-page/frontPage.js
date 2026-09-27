import './frontPage.scss';
import './../../src-utilities/header';
import './../../src-utilities/footer';
import gsap, { ScrollTrigger } from 'gsap/all';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", function () {
    if (typeof Swiper !== 'undefined') {
        var swiper = new Swiper(".heroSwiper", {
            spaceBetween: 0,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            loop: true,
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: false,
            // },
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

    // GSAP ANIMATIONS FOR FRONT PAGE
    
    // 1. Bestsellers - Staggered Fade Up
    const products = document.querySelectorAll('.product-card');
    if (products.length > 0) {
        gsap.fromTo(products, 
            { y: 50, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: "power2.out",
                scrollTrigger: { trigger: ".products-grid", start: "top 85%" }
            }
        );
    }

    // 2. Image Blocks (Dynamic Collections) - Staggered Zoom/Fade
    const imgBlocks = document.querySelectorAll('.image-block-anim');
    if (imgBlocks.length > 0) {
        gsap.fromTo(imgBlocks, 
            { scale: 0.95, opacity: 0 },
            {
                scale: 1, opacity: 1, duration: 0.8, stagger: 0.2, ease: "power2.out",
                scrollTrigger: { trigger: ".image-blocks-grid", start: "top 80%" }
            }
        );
    }

    // 3. History Section Features - Staggered Fade Up
    const features = document.querySelectorAll('.feature-col');
    if (features.length > 0) {
        gsap.fromTo(features, 
            { y: 50, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: "power2.out",
                scrollTrigger: { trigger: ".features-image-grid", start: "top 85%" }
            }
        );
    }

    // 4. Blog Posts - Staggered Fade Up
    const blogs = document.querySelectorAll('.blog-card');
    if (blogs.length > 0) {
        gsap.fromTo(blogs, 
            { y: 50, opacity: 0 },
            {
                y: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: "power2.out",
                scrollTrigger: { trigger: ".blog-grid", start: "top 85%" }
            }
        );
    }
});