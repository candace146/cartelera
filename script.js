document.querySelectorAll('.image-container img').forEach(function(image) {
    image.onclick = function() {
        document.querySelector('.popup-image').style.display = 'block';
        var popupImage = document.querySelector('.popup-image img');
        popupImage.src = image.getAttribute('src');
        popupImage.style.objectPosition = 'left top'; 
    }
});

document.querySelector('.popup-image span').onclick = function() {
    document.querySelector('.popup-image').style.display = 'none';
};
