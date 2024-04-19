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
        <button id="andes-buttom" type="submit" name="andes-buttom"> Andes </button>
        <button id="liniers-buttom" type="submit" name="liniers-buttom"> Liniers </button>
    </form>
</body>
</html>



<?php
session_start();

$_SESSION['w_user'] = "a";
if(isset($_POST['liniers-buttom'])){
    $_SESSION['w_user'] = 'liniers';
    header('Location: index.php?user=bGluaWVycw==');
}elseif(isset($_POST['andes-buttom'])){
    $_SESSION['w_user'] = 'andes';
    header('Location: index.php?user=YW5kZXM=');
}
?>