import './aboutUs.scss';
import '../../src-utilities/header';
import '../../src-utilities/footer';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Tattvah About Us Interactions - Real-time Smooth Interactions

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS (Animate on Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 750,
            easing: 'ease-in-out',
            once: true,
        });
    }

    // Pancha Tattva (5 Sacred Elements) Interactive Tabs
    const elementTabs = document.querySelectorAll('.element-tab-btn');
    const elementPanels = document.querySelectorAll('.element-panel');

    if (elementTabs.length > 0 && elementPanels.length > 0) {
        elementTabs.forEach((tab) => {
            tab.addEventListener('click', () => {
                const targetElement = tab.getAttribute('data-element');

                // Update active tab button
                elementTabs.forEach((btn) => {
                    btn.classList.remove('active');
                    btn.setAttribute('aria-selected', 'false');
                });
                tab.classList.add('active');
                tab.setAttribute('aria-selected', 'true');

                // Switch active panel with smooth animation
                elementPanels.forEach((panel) => {
                    panel.classList.remove('active');
                });
                const targetPanel = document.getElementById(`panel-${targetElement}`);
                if (targetPanel) {
                    targetPanel.classList.add('active');
                }
            });
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