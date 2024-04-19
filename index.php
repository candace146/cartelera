<?php
include './apis/sqlapi.php';
include './apis/login_error_api.php';
include './apis/show_api.php';
$w_user = $_SESSION['w_user'];
//echo $w_user;
showing($w_user);

//var_dump($img_path);
if ($w_user == "andes"){
    $congregacion_title = "Los Andes";
} else if ($w_user == "liniers"){
    $congregacion_title = "Liniers";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Anuncios</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" href="./favicon.ico" type="image/ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
     
    
    
    <hr>
    <br>
    
    <div class="container">
        <div class="image-container">
            
            <div class="image" style="text-align:center;" "background: #FFF;" > 
                <h2 id="acomodadores_microfonistas_title" class="title"> Acomodadores Y Microfonistas</h2> 
                <img id="img_1_d" src="<?= $img_path["acomodadores_microfonistas"][0]; ?>" alt="Por alguna razon no se subieron los archivos sobre los Acomodadores y Microfonistas.">
            </div> 
            
            <div class="image" style="text-align:center;" "background: #FFF;" > <!-- Grupos de salida-->
                <h2 id="grupos_predicacion_title" class="title"> Grupos de Predicacion </h2>
                <img id="img_2_d" src="<?= $img_path["grupos_predicacion"][0]; ?>" alt="Por alguna razon no se subieron los archivos sobre los Grupos de Predicacion.">
            </div> 
            
            <div class="image" id="reunion_entre">
                <h2 id="reunion_entre_title" class="title"> Reunion ENTRE semana </h2>
                <img id="img_3_d" src="<?= $img_path["reunion_e_semana"][0]; ?>" alt="Por alguna razon no se subieron los archivos sobre la Reunion entre Semana.">
            </div>
            
            <div class="image" id="audio_video_plataforma">
                <h2 id="audio_video_title" class="title"> Audio, Video y Plataforma</h2>
                <img id="img_4_d" src="<?= $img_path["audio_video"][0]; ?>" alt="Por alguna razon no se subieron los archivos sobre los encargados de Audio y Video.">
            </div>

            <div class="image" id="cartas">
                <h2 id="cartas1_title" class="title" > Cartas</h2>
                <img id="img_4_d" src="<?= $img_path["cartas_varias"][0] ?>" alt="No hay mas cartas que mostrar">
            </div>
            
            <div class="image" id="limpieza">
                <h2 id="limpieza_title" class="title" > Limpieza </h2>
                <img id="img_4_d" src="<?= $img_path["arreglo_limpieza"][0]; ?>" alt="Supongo que no se limpiara el salon...">
            </div>

            <div class="image" id="contabilidad">
                <h2 class="title" id="contabilidad_title"> Contabilidad</h2>
                <img id="img_4_d" src="<?= $img_path["contabilidad"][0]; ?>" alt="Anuncio sobre la contabilidad, deberia estar, ¿por que no lo esta?">
            </div>
            <div class="image" id="reunion_fin">
                <h2 id="reunion_fin_title" class="title" > Reunion FIN semana </h2>
                <img id="img_4_d" src="<?= $img_path["reunion_f_semana"][0]; ?>" alt="Por alguna razon no subieron los archivos sobre la Reunion de Fin de Semana.">
            </div>
            
            <div class="image" id="fechas_importantes">
                <h2 class="title" id="fechas_importantes_title" > Fechas Importantes </h2>
                <img id="img_4_d" src="<?= $img_path["fechas_importantes"][0]; ?>" alt="No hay fechas importantes...">
            </div>

            <div class="image" id="cartas3">
                <h2 class="title" id="cartas3_title"> Cartas</h2>
                <img id="img_4_d" src="<?= $img_path["cartas_varias"][1]; ?>" alt="No hay mas cartas que mostrar">
            </div>
            
            
            
           
        </div>
    <div class="popup-image">
        <span>&times;</span>
        <img src="" alt="">
    </div>
</div>

<button class="log_in_buttom" onclick="location.href = 'login.php'"> Log In </button>
<script src="script.js"></script>
</body>
</html>