import AOS from 'aos';
AOS.init();

// Header Interactive Logic: Search Toggle & Mobile Drawer Support
document.addEventListener('DOMContentLoaded', function () {
    const searchToggle = document.getElementById('sl-search-toggle');
    const searchPanel = document.getElementById('sl-search-panel');
    const hamburgerBtn = document.getElementById('toggle-btn');
    const drawerCloseBtn = document.getElementById('sl-drawer-close-btn');
    const mobileDrawer = document.getElementById('side-navbar');
    const drawerOverlay = document.getElementById('sl-drawer-backdrop');

    // Toggle Search Dropdown (Inline)
    if (searchToggle && searchPanel) {
        searchToggle.addEventListener('click', function (e) {
            e.preventDefault();
            searchPanel.classList.toggle('open');
            if (searchPanel.classList.contains('open')) {
                const input = searchPanel.querySelector('input');
                if (input) input.focus();
            }
        });
    }

    // Hide Top Announcement Bar on Scroll
    const topBar = document.getElementById('sl-top-bar');
    if (topBar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 45) {
                topBar.classList.add('hidden-bar');
            } else {
                topBar.classList.remove('hidden-bar');
            }
        });
    }

    // Mobile Drawer Open
    if (hamburgerBtn && mobileDrawer) {
        hamburgerBtn.addEventListener('click', function (e) {
            e.preventDefault();
            mobileDrawer.classList.add('open');
            if (drawerOverlay) drawerOverlay.classList.add('open');
        });
    }

    // Mobile Drawer Close
    function closeDrawer() {
        if (mobileDrawer) mobileDrawer.classList.remove('open');
        if (drawerOverlay) drawerOverlay.classList.remove('open');
    }

    if (drawerCloseBtn) {
        drawerCloseBtn.addEventListener('click', closeDrawer);
    }
    if (drawerOverlay) {
        drawerOverlay.addEventListener('click', closeDrawer);
    }
});