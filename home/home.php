<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">´
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Tablero de Anuncios</title>
    </head>
<body>
    

<h2> Bienvenido. </h2>
<div class="acciones">
    <h3 > Acciones </h3>
    <a id="upload_form_button" href = 'upload.php' class="homeButton"> Subir un archivo </a>
    <a href="../apis/photos_automatic/fetchGoogleSiteImages.php" id="fetchButtom" class="homeButton"> Intentar descargar las fotos del Google Site.</a>
</div>
<button id="log_off_button" onclick="location.href = 'logout.php'"> Cerrar Sesion</button>
<a href="faq/faq.html" id="faq_button"> Ayuda </a>
<?php 
include '../variables.php';

echo "<p id='arch'> $buildAndArch </p>";
?>
</body>
</html>