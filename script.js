let timeoutId;

document.querySelectorAll('.image-container img').forEach(image => {
    image.onclick = () => {
        document.querySelector('.popup-image').style.display = 'block';
        const popupImage = document.querySelector('.popup-image img');
        popupImage.src = image.getAttribute('src');
        popupImage.style.objectPosition = 'left top'; 
        document.getElementById("logIn").addEventListener('click', function(event){
            event.preventDefault(); // Evita que el enlace se abra
            event.style.color = '#fff';
        });
        clearTimeout(timeoutId);
        timeoutId = setTimeout(returnToGallery, 60000); // Cambiado a 1 minuto (60000 milisegundos)
        
        
    }
});

document.querySelector('.popup-image span').onclick = () => {
    document.querySelector('.popup-image').style.display = 'none';
    clearTimeout(timeoutId); 
}

document.addEventListener('click', resetTimeout); // Escucha los clics en cualquier parte del documento

function resetTimeout() {
    clearTimeout(timeoutId); 
    timeoutId = setTimeout(returnToGallery, 120000); // Reinicia el temporizador después de un minuto de inactividad
}

function returnToGallery() {
    document.querySelector('.popup-image').style.display = 'none'; 
    // Aquí puedes agregar código adicional para volver a mostrar todas las imágenes en la galería
}


