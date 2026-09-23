import "./socialHighlights.scss";
import './../../src-utilities/header';
import './../../src-utilities/footer';

document.addEventListener("DOMContentLoaded", () => {

  const gallery = document.querySelector("#gallery");
  const items = Array.from(gallery.children);

  const initialLoad = 12;
  let currentIndex = initialLoad;

  // Hide all images after first 12
  items.forEach((item, index) => {
    if (index >= initialLoad) {
      item.style.display = "none";
    }

    item.style.order = Math.floor(Math.random() * 1000);
  });

  const trigger = document.querySelector("#loadTrigger");

  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) {

      for (let i = currentIndex; i < currentIndex + 12; i++) {
        if (items[i]) {
          items[i].style.display = "block";
        }
      }

      currentIndex += 12;

      if (currentIndex >= items.length) {
        observer.disconnect();
      }
    }
  });

  observer.observe(trigger);

});