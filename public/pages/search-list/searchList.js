// Jai Bajarang Bali
import "./searchList.scss";
import './../../src-utilities/header';
import './../../src-utilities/footer';


// Full Code For Search Category Filter

// Get the search term from the URL query parameter
const urlParams = new URLSearchParams(window.location.search);
const searchQuery = urlParams.get('query');

// If there's a query parameter, pre-fill the search input
if (searchQuery) {
    const searchInput = document.getElementById('searchInput');
    searchInput.value = searchQuery;
    // Automatically trigger the search
    performSearch();
} else {
    // If no search query, fetch and display all data
    fetchAndDisplayAllData();
}

// Fetch data from the WordPress APIs with pagination
async function fetchDataFromAPIs(query = "") {
    const combinedData = [];
    const apiUrl1 = `https://shreysharma.com/wp-json/wp/v2/blog?_fields=acf,title,link,excerpt,date&per_page=90${query ? `&search=${query}` : ""}`;
    const apiUrl2 = `https://shreysharma.com/wp-json/wp/v2/tattvah-show?_fields=acf,title,link,excerpt,date&per_page=90${query ? `&search=${query}` : ""}`;
    const apiUrl3 = `https://shreysharma.com/wp-json/wp/v2/newsletter?_fields=acf,title,link,excerpt,date&per_page=90${query ? `&search=${query}` : ""}`;
    // Fetch all data from API 1
    const response1 = await fetch(apiUrl1);
    if (!response1.ok) {
        throw new Error(`API 1 request failed with status ${response1.status}`);
    }
    const data1 = await response1.json();
    combinedData.push(...data1.map(post => ({
        type: "Blog",
        title: post.title.rendered,
        description: post.excerpt.rendered,
        date: new Date(post.date),
        link: post.link,
    })));
    // Fetch all data from API 2
    const response2 = await fetch(apiUrl2);
    if (!response2.ok) {
        throw new Error(`API 2 request failed with status ${response2.status}`);
    }
    const data2 = await response2.json();
    combinedData.push(...data2.map(post => ({
        type: "Shrey-Sharma-Show",
        title: post.title.rendered,
        description: post.excerpt.rendered,
        date: new Date(post.date),
        link: post.link,
    })));
    // Fetch all data from API 3
    const response3 = await fetch(apiUrl3);
    if (!response3.ok) {
        throw new Error(`API 3 request failed with status ${response3.status}`);
    }
    const data3 = await response3.json();
    combinedData.push(...data3.map(post => ({
        type: "case-study", // Adjust the type as needed
        title: post.title.rendered,
        description: post.excerpt.rendered,
        date: new Date(post.date),
        link: post.link,
    })));
    return combinedData;
}

// Fetch and display all data
async function fetchAndDisplayAllData() {
    const allData = await fetchDataFromAPIs();
    updateResults(allData);
}

// Perform search
async function performSearch() {
    const searchQuery = document.getElementById("searchInput").value.trim().toLowerCase();
    if (!searchQuery) {
        // If search query is empty, fetch and display all data
        fetchAndDisplayAllData();
        return;
    }
    // Update the URL with the search query
    const currentUrl = new URL(window.location);
    currentUrl.searchParams.set("query", searchQuery);
    window.history.replaceState({}, "", currentUrl);
    // Fetch dynamic API data and filter it by title
    const dynamicData = await fetchDataFromAPIs(searchQuery);
    const filteredDynamicData = dynamicData.filter(item =>
        item.title.toLowerCase().includes(searchQuery)
    );
    // Combine and update results
    updateResults(filteredDynamicData);
}

// Update results and display them
function updateResults(dynamicData) {
    // Update result count
    const resultCount = dynamicData.length;
    document.getElementById("resultCount").innerText = `${resultCount} Result${resultCount !== 1 ? "s" : ""}`;
    // Update category filter counts
    const blogCount = dynamicData.filter(item => item.type === "Blog").length;
    const showCount = dynamicData.filter(item => item.type === "Shrey-Sharma-Show").length;
    const newApiCount = dynamicData.filter(item => item.type === "case-study").length; // Adjust based on the new API type
    document.getElementById("blogCount").innerText = `${blogCount}`;
    document.getElementById("ShowCount").innerText = `${showCount}`;
    document.getElementById("CaseCount").innerText = `${newApiCount}`; // Adjust based on the new API type
    // Clear current cards
    clearCards();
    if (resultCount === 0) {
        // No results
        document.getElementById("dynamicResults").innerHTML = `<p id="nothing-found-message">No Results Found</p>`;
        return;
    }
    // Sort data based on the selected sort option
    const sortBy = document.getElementById("sortBy").value;
    if (sortBy === "newest") {
        dynamicData.sort((a, b) => b.date - a.date); // Sort by newest
    } else if (sortBy === "oldest") {
        dynamicData.sort((a, b) => a.date - b.date); // Sort by oldest
    }
    // Render results in separate sections
    renderCards(dynamicData, "dynamicResults");
    // Apply category filters
    applyCategoryFilters();
}

// Render cards dynamically into the specified container
function renderCards(data, containerId) {
    const container = document.getElementById(containerId);
    // Clear the container before adding new cards
    container.innerHTML = '';
    data.forEach(item => {
        // Clone a card template
        const card = document.createElement("div");
        card.classList.add("card");
        card.setAttribute("data-type", item.type); // Add type for filtering
        if (item.type === "Blog") {
            card.innerHTML = `
            ${item.link ? `
                <a class="card-link" href="${item.link}" target="_blank">
                    <span class="badge color-1">BLOG</span>
                    <h2 class="title">${item.title}</h2>
                    ${item.description ? `<p class="description">${item.description}</p>` : ""}
                    <div class="meta">
                        ${item.date ? `<span class="meta-date">${item.date.toLocaleDateString()}</span>` : ""}
                    </div>
                </a>` : ""}
            `;
        } else if (item.type === "Shrey-Sharma-Show") {
            card.innerHTML = `
            ${item.link ? `
                <a class="card-link" href="${item.link}" target="_blank">
                    <span class="badge color-2">Tattvah Show</span>
                    <h2 class="title">${item.title}</h2>
                    ${item.description ? `<p class="description">${item.description}</p>` : ""}
                    <div class="meta">
                        ${item.date ? `<span class="meta-date">${item.date.toLocaleDateString()}</span>` : ""}
                    </div>
                </a>` : ""}
            `;
        } else if (item.type === "case-study") {
            card.innerHTML = `
            ${item.link ? `
                <a class="card-link" href="${item.link}" target="_blank">
                    <span class="badge color-3">Newsletter</span>
                    <h2 class="title">${item.title}</h2>
                    ${item.description ? `<p class="description">${item.description}</p>` : ""}
                    <div class="meta">
                        ${item.date ? `<span class="meta-date">${item.date.toLocaleDateString()}</span>` : ""}
                    </div>
                </a>` : ""}
            `;
        }
        // Append the created card to the container
        container.appendChild(card);
    });
}

// Clear all cards
function clearCards() {
    document.getElementById("dynamicResults").innerHTML = "";
}

// Apply category filters
function applyCategoryFilters() {
    const selectedCategories = Array.from(document.querySelectorAll(".category-checkbox:checked")).map(checkbox => checkbox.value);
    const allCards = document.querySelectorAll(".card");
    allCards.forEach(card => {
        const cardType = card.getAttribute("data-type");
        if (selectedCategories.length === 0 || selectedCategories.includes(cardType)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
    // Update "No Results" message if no visible cards
    const visibleCards = document.querySelectorAll(".card:not([style*='display: none'])");
    if (visibleCards.length === 0) {
        document.getElementById("resultCount").innerText = "No Results";
    }
}

// Add event listeners
document.getElementById("searchInput").addEventListener("keydown", event => {
    if (event.key === "Enter") {
        performSearch();
    }
});

// Add event listener for sorting
document.getElementById("sortBy").addEventListener("change", () => {
    // Re-run the search to apply sorting
    performSearch();
});

// If want to add button search in future
// document.getElementById("searchButton").addEventListener("click", performSearch);
document.querySelectorAll(".category-checkbox").forEach(checkbox => {
    checkbox.addEventListener("change", applyCategoryFilters);
});

// Input Message Update
// Get references to the input field and paragraph
var inputField = document.getElementById('searchInput');
var outputParagraph = document.getElementById('outputParagraph');

// Function to update the paragraph based on input
function updateParagraph() {
    var inputText = inputField.value.trim();
    // Display a standard message with the input keyword
    outputParagraph.innerText = inputText === "" ? "" : "" + `"${inputText}"`;
}

// Add event listeners to the input field
inputField.addEventListener('input', updateParagraph);
inputField.addEventListener('blur', updateParagraph);