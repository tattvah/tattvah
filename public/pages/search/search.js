// Jai Bajarang Bali
import "./search.scss";
import './../../src-utilities/header';
import './../../src-utilities/footer';

// code for sending value to search page bar
const homeSearchForm = document.getElementById('searchForm');
const homeSearchInput = document.getElementById('searchInput');
const presetSearchButton = document.getElementById('presetSearchButton');

// Handle form submission with user input
homeSearchForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const searchTerm = homeSearchInput.value.trim();

    if (searchTerm) {
        // Redirect to search page with search term as a URL parameter
        window.location.href = `/search-list?query=${encodeURIComponent(searchTerm)}`;
    }
});

// Handle preset search button click
presetSearchButton.addEventListener('click', function () {
    window.location.href = `/search-list`;
});


// arrow from bottom js
document
    .getElementById("knowButton")
    .addEventListener("click", function () {
        const svgContainer = document.getElementById("transitionSvg");
        svgContainer.classList.add("show");
    });