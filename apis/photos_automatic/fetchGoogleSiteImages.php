<?php
include '../login_error_api.php';
include '../show_api.php';
include '../sqlapi.php';
include('simple_html_dom.php');
$w_user = $_SESSION["w_user"];
//var_dump($_SESSION);
$directory = '../../home/files/' . $w_user . '/periodic/';
$nOfImages = 1;
function fetchGoogleSite($directory, $nOfImages){
    $urlState = [ "reuniones_publicas" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/congregaci%C3%B3n/reuniones-p%C3%BAblicas-presidentes-y-lectores',
                  "reuniones_entre_semana" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/congregaci%C3%B3n/programa-para-la-reuni%C3%B3n-de-entre-semana',
                  "acomodadores" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/congregaci%C3%B3n/acomodadores-y-microfonistas',
                  "audiovideo" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/congregaci%C3%B3n/audio-video-y-plataforma',
                  "limpieza" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/congregaci%C3%B3n/limpieza',
                  "grupos" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal/congregaci%C3%B3n/grupos',
                  "fechas" => 'https://sites.google.com/view/congregacion-plaza-los-andes/p%C3%A1gina-principal' ];
    foreach ($urlState as $name => $fetchUrl) {
        $fetchedUrl = file_get_html($fetchUrl);
        echo "<br> <b>Fetching URL </b>:". $fetchUrl .  "<br>  <b>Tema de la Imagen: </b>" . $name . " <br>";
        $imageSrc = $fetchedUrl->find('img');
        foreach ($imageSrc as $img) {
            $imgSrc = $img->src;
            echo "<br> Valor: " . $nOfImages . "<br>";
            $nOfImages++;
            $imgName = $name; 
            $imgPath = $directory . $imgName. $nOfImages . '.jpg';
            
            
            file_put_contents($imgPath, file_get_contents($imgSrc));
    
            echo "<b> Imagen descargada </b>: $imgPath <br>";
        }
    }
       
}

function createDirectoryPeriodic($w_user, $directory) {
    if (!is_dir($directory)) {
        mkdir($directory);
        echo "<br> <u> Creando la carpeta para las fotos periodicas... </u> <br>";
    } else {
        echo "<br>  <u> Carpeta: OK </u> <br>";
    }
    
}
try {
    $logFile = '../../sources/logs/fetchGoogleSite.log';
    createDirectoryPeriodic($w_user, $directory);
    fetchGoogleSite($directory, $nOfImages); 
    $date = date('Y-m-d H:i:s');
    $log = $date . " Status: OK\n";
    // Asegúrate de abrir el archivo en modo de escritura y agregar para no sobrescribir su contenido existente
    error_log($log, 3, '../../sources/logs/fetchGoogleSite.log');
} catch (Exception $error) {
    // Dentro del catch, la variable de excepción es $error, no $e
    error_log($error->getMessage(), 3, '../../sources/logs/fetchGoogleSite.log');
}
?>