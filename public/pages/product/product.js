import './product.scss';
import '../../src-utilities/header';
import '../../src-utilities/footer';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Swiper for Thumbnails
    if (typeof Swiper !== 'undefined' && document.querySelector('.product-thumb-slider')) {
        const thumbSlider = new Swiper('.product-thumb-slider', {
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
        const thumbs = document.querySelectorAll('.product-thumb-slider .swiper-slide img');
        
        thumbs.forEach(thumb => {
            thumb.addEventListener('click', function() {
                if (mainImg) {
                    mainImg.src = this.src; // Swap main image
                }
                
                // Active state styling
                document.querySelectorAll('.product-thumb-slider .swiper-slide').forEach(s => {
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
});


