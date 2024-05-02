<?php 
    include './apis/sqlapi.php';
    include './apis/login_error_api.php';
    
    if (isset($_POST['username'], $_POST['password'])){
        global $user, $pass;
        $user = $_POST['username'];
        $pass = $_POST['password'];
    }

    $_SESSION['w_user'] = $user;
    check_user_and_pass($user, $pass, $con);
    


?>
