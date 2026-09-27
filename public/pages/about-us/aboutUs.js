import './aboutUs.scss';
import '../../src-utilities/header';
import '../../src-utilities/footer';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS (Animate on Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 750,
            easing: 'ease-in-out',
            once: true,
        });
    }

    // Interactive Accordion for FAQs
    const faqDetails = document.querySelectorAll('.tattvah-about-page details.faq-item');
    faqDetails.forEach((targetDetail) => {
        targetDetail.addEventListener('toggle', () => {
            if (targetDetail.open) {
                faqDetails.forEach((detail) => {
                    if (detail !== targetDetail && detail.open) {
                        detail.removeAttribute('open');
                    }
                });
            }
        });
    });
});