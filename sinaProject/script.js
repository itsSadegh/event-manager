 

// Scroll to Top Button
const backToTopButton = document.querySelector('.back-to-top');

// Shrink Header on Scroll
const header = document.querySelector('.hero-nav');
let isHeaderShrunk = false;

window.addEventListener('scroll', () => {
  const scrollOffset = window.scrollY;

  if (scrollOffset > 200) {
    backToTopButton.style.display = 'block';
  } else {
    backToTopButton.style.display = 'none';
  }

  if (scrollOffset > 100 && !isHeaderShrunk) {
    header.classList.add('header-shrink');
    isHeaderShrunk = true;
  } else if (scrollOffset <= 100 && isHeaderShrunk) {
    header.classList.remove('header-shrink');
    isHeaderShrunk = false;
  }
});

// Scroll to top on button click
backToTopButton.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const searchButton = document.getElementById("search-button");
  const clearSearchButton = document.getElementById("clear-search-button");
  const searchInput = document.getElementById("search-input");

  searchButton.addEventListener("click", function () {
    const searchTerm = searchInput.value.toLowerCase();
    const eventContainers = document.querySelectorAll(".cart-container .cart");

    eventContainers.forEach(function (container) {
      const title = container.querySelector(".cart-title").textContent.toLowerCase();
      const speaker = container.querySelector(".cart-speaker").textContent.toLowerCase();
      const place = container.querySelector(".cart-place").textContent.toLowerCase();
      const time = container.querySelector(".cart-time").textContent.toLowerCase();

      if (
        title.includes(searchTerm) ||
        speaker.includes(searchTerm) ||
        place.includes(searchTerm) ||
        time.includes(searchTerm)
      ) {
        container.style.display = "block";
      } else {
        container.style.display = "none";
      }
    });

    scrollToResults(); // Scroll to first result after search
  });

  clearSearchButton.addEventListener("click", function () {
    const eventContainers = document.querySelectorAll(".cart-container .cart");
    eventContainers.forEach(function (container) {
      container.style.display = "block";
    });

    searchInput.value = ""; // Clear search input box
    scrollToTop(); // Scroll to the top after clearing search
  });

  // Scroll to first visible result
  function scrollToResults() {
    const firstVisibleResult = document.querySelector(".cart-container .cart:visible");
    if (firstVisibleResult) {
      const headerHeight = document.querySelector(".hero-nav").offsetHeight;
      const resultPosition = firstVisibleResult.getBoundingClientRect().top + window.scrollY - headerHeight;
      window.scrollTo({ top: resultPosition, behavior: "smooth" });
    }
  }

  // Scroll to the top of the page
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
});



document.addEventListener("DOMContentLoaded", function () {
  const editButtons = document.querySelectorAll(".edit-button");
  const editForm = document.getElementById("edit-form");
  const eventForm = document.getElementById("event-form");


  

  editButtons.forEach(function (button) {
    button.addEventListener("click", function () {

      // Show the edit form
      editForm.style.display = "block";

      // hide the event form
      eventForm.style.display = "none";


      const eventId = button.getAttribute("data-id");
      const eventContainer = button.closest(".cart");
      const title = eventContainer.querySelector(".cart-title").textContent;
      const speaker = eventContainer.querySelector(".cart-speaker").textContent;
      const duration = eventContainer.querySelector(".cart-duration").textContent;
      const time = eventContainer.querySelector(".cart-time").textContent;
      const place = eventContainer.querySelector(".cart-place").textContent;
      const description = eventContainer.querySelector(".cart-description").textContent;

      // Populate the edit form
      editForm.querySelector("#edit-id").value = eventId;
      editForm.querySelector("#edit-title").value = title;
      editForm.querySelector("#edit-speaker").value = speaker;
      editForm.querySelector("#edit-duration").value = duration;
      editForm.querySelector("#edit-time").value = time;
      editForm.querySelector("#edit-place").value = place;
      editForm.querySelector("#edit-description").value = description;

    });
  });

  editForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(editForm);
    fetch("edit_event.php", {
      method: "POST",
      body: formData,
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Update the event on the page
          const editedEvent = document.querySelector(`.cart[data-id="${data.id}"]`);
          editedEvent.querySelector(".cart-title").textContent = data.title;
          editedEvent.querySelector(".cart-speaker").textContent = data.speaker;
          editedEvent.querySelector(".cart-duration").textContent = data.duration;
          editedEvent.querySelector(".cart-time").textContent = data.time;
          editedEvent.querySelector(".cart-place").textContent = data.place;
          editedEvent.querySelector(".cart-description").textContent = data.description;

          // Clear the edit form and hide it
          editForm.reset();
          editForm.style.display = "none";
        } else {
          // Handle error
          console.error("Edit failed:", data.message);
        }
      });
  });

});
