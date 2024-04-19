<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./upload.css">
    <title>Formulario de subida de archivos</title>
</head>
<body>
    
    <h2> Formulario de subida de archivos </h2>
    <h3> Como quien estoy subiendo el archivo? <?php session_start(); $whoami = $_SESSION['w_user'];  echo $whoami?> </h3>
    <div class="upload-container">
        <form action="upload.php" method="post" enctype="multipart/form-data"> 
            <input type="file"  name="pdf_input">
            

            <p> Tema del archivo: 
                <select multiple name="opciones_temas[]" id="opciones_temas">
                    <option value="predicacion"> Predicacion </option>
                    <option value="contabilidad"> Informe de cuentas </option>
                    <option value="recordatorios"> Recordatorios </option>
                    <option value="reunion_e_semana"> Reunion entre semana</option>
                    <option value="reunion_f_semana"> Reunion de fin de semana</option>
                    <option value="grupos_predicacion"> Grupos para el servicio del campo</option>
                    <option value="cartas_varias"> Cartas varias</option>
                    <option value="acomodadores_microfonistas"> Acomodadores y Microfonistas</option>
                    <option value="audio_video"> Audio, video y plataforma.</option>
                    <option value="arreglo_limpieza"> Arreglo Sobre la limpieza</option>
                    <option value="fechas_importantes"> Fechas Importantes para la Congregacion</option>
                </select>
                
            </p>
            <button type="submit" name="submit_buttom"> Subir archivo</button>
        </form>
    </div>
    <?php 
    error_reporting(E_ALL ^ E_NOTICE); // Desabilita las notices de php. Como no son alerts o Fatal alerts no hacen falta verlas, el codigo sigue funcionando jajaja
    include '../apis/sqlapi.php';
    include '../apis/login_error_api.php';

    

    if (isset($_POST['opciones_temas'])){
        $pdf_tema = $_POST['opciones_temas'];
    }

    $w_user = $_SESSION['w_user'];
    if (isset($_FILES['pdf_input'])){
        upload_file($w_user, $pdf_tema);
    } 
    if (isset($_GET['errors'])){
        $e_c = $_GET['errors'];
        error_manage($e_c);
    }
?>
</body>
</html>
