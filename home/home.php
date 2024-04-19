<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <title>Tablero de Anuncios</title>
    </head>
<body>
    

<h2> Bienvenido. </h2>
<button id="log_off_button" onclick="location.href = 'logout.php'"> Cerrar Sesion</button>
<button id="upload_form_button" onclick="location.href = 'upload.php'"> Subir un archivo </button>

<a href="faq/faq.html" id="faq_button"> Ayuda </a>

<?php 
include '../variables.php';

echo "<p id='arch'> $build_and_arch </p>";
?>
</body>
</html>