<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login_page.css">
    
    <style>
        .error-message {
        background-color: #ffcccc; /* Fondo rojo claro */
        border: 1px solid #ff6666; /* Borde rojo */
        color: #ff0000; /* Texto rojo */
        padding: 10px; /* Espaciado interno */
        text-align: center; /* Centrar el texto */
        font-size: 17px;
        max-width: 400px; /* Ajusta el ancho máximo según tus necesidades */
        margin: 0 auto; /* Centra el cuadro horizontalmente */
        border-radius: 5px;
        margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="login-bck.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button id="submit" type="submit" name="submit">Iniciar Sesión</button>
        </form>
        </div>
        <?php 
        include './apis/login_error_api.php';
        if (!empty($_GET['errors'])){
            $error = $_GET['errors'];
            error_manage($error);
        }
        ?>
    


</body>
</html>