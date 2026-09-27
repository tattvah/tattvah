import './product.scss';
import '../../src-utilities/header';
import '../../src-utilities/footer';
import gsap, { ScrollTrigger } from 'gsap/all';

gsap.registerPlugin(ScrollTrigger);
document.addEventListener('DOMContentLoaded', () => {
    console.log("Product JS Loaded");
    // 1. Initialize Swiper for Thumbnails
    if (typeof Swiper !== 'undefined' && document.querySelector('.sp-thumb-slider')) {
        const thumbSlider = new Swiper('.sp-thumb-slider', {
            spaceBetween: 12,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // Mobile
                320: { slidesPerView: 3, spaceBetween: 8 },
                // Desktop
                768: { slidesPerView: 4, spaceBetween: 12 }
            }
        });

        // 2. Handle Thumbnail Click to change main image
        const mainImg = document.getElementById('mainProductImg');
        const thumbs = document.querySelectorAll('.sp-thumb-slider .swiper-slide img');
        
        thumbs.forEach(thumb => {
            thumb.addEventListener('click', function() {
                if (mainImg) {
                    mainImg.src = this.src; // Swap main image
                }
                
                // Active state styling
                document.querySelectorAll('.sp-thumb-slider .swiper-slide').forEach(s => {
                    s.style.opacity = '0.6';
                    s.style.borderColor = 'transparent';
                });
                this.parentElement.style.opacity = '1';
                this.parentElement.style.borderColor = '#111';
            });
        });

        // Set initial active state for first thumbnail
        if (thumbs.length > 0) {
            thumbs[0].parentElement.style.opacity = '1';
            thumbs[0].parentElement.style.borderColor = '#111';
        }
    }

    // 3. Quantity Selector Logic
    const qtyInput = document.querySelector('input[type="number"]');
    const btnMinus = document.querySelector('.qty-minus');
    const btnPlus = document.querySelector('.qty-plus');

    if (qtyInput && btnMinus && btnPlus) {
        btnMinus.addEventListener('click', () => {
            let val = parseInt(qtyInput.value) || 1;
            if (val > 1) {
                qtyInput.value = val - 1;
            }
        });

        btnPlus.addEventListener('click', () => {
            let val = parseInt(qtyInput.value) || 1;
            qtyInput.value = val + 1;
        });
    }

    // 4. Initialize Other Products Slider
    if (typeof Swiper !== 'undefined' && document.querySelector('.other-products-slider')) {
        const otherProdSlider = new Swiper('.other-products-slider', {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: '.op-next',
                prevEl: '.op-prev',
            },
            breakpoints: {
                // Mobile
                320: { slidesPerView: 1, spaceBetween: 20 },
                // Tablet
                768: { slidesPerView: 2, spaceBetween: 20 },
                // Desktop
                1024: { slidesPerView: 4, spaceBetween: 30 }
            }
        });
    }

    // 5. GSAP Animations for Product Page
    // A. Main Product Layout Fade In
    const spMedia = document.querySelector('.sp-media');
    const spDetails = document.querySelector('.sp-details');
    
    if (spMedia && spDetails) {
        gsap.fromTo(spMedia, 
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: "power2.out", delay: 0.1 }
        );
        gsap.fromTo(spDetails, 
            { y: 30, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.8, ease: "power2.out", delay: 0.3 }
        );
    }

    // B. Main Product Image Subtle Zoom
    const spMainImg = document.querySelector('.sp-main-image-wrapper img');
    if (spMainImg) {
        gsap.fromTo(spMainImg,
            { scale: 1.05 },
            { scale: 1, duration: 1.5, ease: "power2.out" }
        );
    }

    // C. Other Products Staggered Fade-in
    const opCards = document.querySelectorAll('.op-card');
    if (opCards.length > 0) {
        gsap.fromTo(opCards,
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.15,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".other-products-section",
                    start: "top 80%",
                }
            }
        );
    }
});


