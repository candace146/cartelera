<?php
session_start();
include '../login_error_api.php';
include '../show_api.php';
include '../sqlapi.php';
include('simple_html_dom.php');
$w_user = $_SESSION["w_user"];
var_dump($w_user);
$url = 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/predicaci%C3%B3n/salidas';
$html = file_get_html($url);
$image_tags = $html->find('img');

function createDirectoryPeriodic($w_user) {
    $directory = '../../home/files/' . $w_user . '/periodic/';
    if (!is_dir($directory)) {
        mkdir($directory);
    }
    sleep(5);
    echo "Creando la carpeta para las fotos periodicas...";
}


foreach ($image_tags as $img) {
    $img_url = $img->src;
    $img_name = basename($img_url); 
    $img_path = $directory . '/' . $img_name . '.jpg';
    
    
    file_put_contents($img_path, file_get_contents($img_url));

    echo "Imagen descargada: $img_name <br>";
}
createDirectoryPeriodic($w_user);
echo "Finalizado";
header('Location: ../../home/home.php');

?>