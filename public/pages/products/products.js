import './products.scss';
import '../../src-utilities/header';
import '../../src-utilities/footer';document.addEventListener('DOMContentLoaded', function() {
    const sortDropdown = document.getElementById('js-sort-dropdown');
    const grid = document.querySelector('.products-grid');
    const cards = grid ? Array.from(grid.querySelectorAll('.product-card')) : [];
    const checkboxes = document.querySelectorAll('.js-tag-filter');

    function updateGrid() {
        if(!grid) return;
        
        const activeFilters = Array.from(checkboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.value);
            
        const visibleCards = [];
        
        cards.forEach(card => {
            if (activeFilters.length === 0) {
                visibleCards.push(card);
                card.style.display = '';
            } else {
                const cardTags = card.dataset.tags ? card.dataset.tags.split(',').map(t => t.trim().toLowerCase()) : [];
                const matches = activeFilters.some(filter => cardTags.includes(filter.trim().toLowerCase()));
                if (matches) {
                    visibleCards.push(card);
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            }
        });
        
        if (sortDropdown) {
            const sortVal = sortDropdown.value;
            visibleCards.sort((a, b) => {
                if(sortVal === 'price_low') {
                    return parseFloat(a.dataset.price) - parseFloat(b.dataset.price);
                } else if(sortVal === 'price_high') {
                    return parseFloat(b.dataset.price) - parseFloat(a.dataset.price);
                } else if(sortVal === 'title_asc') {
                    return a.dataset.title.localeCompare(b.dataset.title);
                } else {
                    return new Date(b.dataset.date) - new Date(a.dataset.date);
                }
            });
            
            visibleCards.forEach(card => grid.appendChild(card));
        }
        
        let noProductsMsg = document.querySelector('.no-products-js');
        if (visibleCards.length === 0) {
            if (!noProductsMsg) {
                noProductsMsg = document.createElement('div');
                noProductsMsg.className = 'no-products no-products-js';
                noProductsMsg.innerHTML = '<p>No products match the selected filters.</p>';
                noProductsMsg.style.gridColumn = '1 / -1';
                grid.appendChild(noProductsMsg);
            } else {
                noProductsMsg.style.display = 'block';
            }
        } else if (noProductsMsg) {
            noProductsMsg.style.display = 'none';
        }
    }

    if(sortDropdown) {
        sortDropdown.addEventListener('change', updateGrid);
    }
    
    checkboxes.forEach(cb => {
        cb.addEventListener('change', updateGrid);
    });
    
    const urlParams = new URLSearchParams(window.location.search);
    const tagParam = urlParams.get('filter_tag');
    if (tagParam) {
        let found = false;
        checkboxes.forEach(cb => {
            if (cb.value === tagParam) {
                cb.checked = true;
                found = true;
            }
        });
        if (found) updateGrid();
    }
});
