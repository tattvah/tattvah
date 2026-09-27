import './blogs.scss';
import './../../src-utilities/header';
import './../../src-utilities/country';
import './../../src-utilities/footer';

import gsap, { ScrollTrigger } from 'gsap/all';

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    // 1. Staggered fade-in for blog cards (.resource)
    const resources = document.querySelectorAll('.resource');
    if (resources.length > 0) {
        gsap.fromTo(resources, 
            { y: 50, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.15,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: ".resource-list",
                    start: "top 85%",
                }
            }
        );
    }
});
