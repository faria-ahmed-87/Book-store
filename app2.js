// const mainImage = document.querySelector('.main-image');
// const thumbnails = document.querySelectorAll('.thumbnail');

// thumbnails.forEach(thumbnail => {
//   thumbnail.addEventListener('click', () => {
//     mainImage.src = thumbnail.src;
//   });
// });
const mainImage = document.querySelector('.main-image');
const thumbnails = document.querySelectorAll('.thumbnail');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let currentIndex = 0;

// Function to update the main image
function updateMainImage(index) {
    mainImage.src = thumbnails[index].src;
}

// Thumbnail click event
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        currentIndex = index;
        updateMainImage(currentIndex);
    });
});

// Left arrow click event
leftArrow.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : thumbnails.length - 1;
    updateMainImage(currentIndex);
});

// Right arrow click event
rightArrow.addEventListener('click', () => {
    currentIndex = (currentIndex < thumbnails.length - 1) ? currentIndex + 1 : 0;
    updateMainImage(currentIndex);
});
