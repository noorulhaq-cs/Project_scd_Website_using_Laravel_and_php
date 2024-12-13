const searchInput = document.getElementById('search-input');

searchInput.addEventListener('keyup', (event) => {
    // Handle search functionality here, e.g., send search query to a server
    console.log(event.target.value);
});

function changeImage(imageSrc) {
    document.getElementById('mainImage').src = imageSrc; // Semicolon added
}
