<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona la congregacion.</title>
    <link rel="stylesheet" href="./sc.css">
</head>
<body>
    <h3>¿A que congregacion quieres ingresar?</h3>
    <form action="select_cong.php" method="post">
        <select multiple name="congSelector" id="congSelector"  class="congSelector">
            <option value="andes"> Congregacion Los Andes </option>
            <option value="liniers"> Congregacion Liniers </option>
        </select>
        <button id="goToCartelera" class="goToCartelera" name="goToCartelera" type="submit"> Ingresar a la Cartelera </button>
        <br>
        <a href="login.php" id="logIn" class="logIn"> Iniciar sesion.</a>
        

    </form>
</body>
</html>



<?php

session_start();

$_SESSION['w_user'] = "a";
if (isset($_POST['congSelector'])){
    $w_user = $_POST['congSelector'];
    $_SESSION['w_user'] = $w_user;
    if($w_user == "andes"){
        header('Location: index.php?user=YW5kZXM==');
    } elseif ($w_user == "liniers"){
        header('Location: index.php?user=bGluaWVycw==');
    }
}
?>