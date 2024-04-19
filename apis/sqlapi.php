<?php 
include 'C:/xampp/htdocs/dashboard/variables.php';
session_start();
$w_user = $_SESSION['w_user'];
// SQL VARIABLES
function check_user_and_pass($user, $pass){
    $DATABASE_HOST = '127.0.0.1';
    $DATABASE_USER = 'root';
    $DATABASE_PASSWD = '';
    $DATABASE_NAME = 'users_anuncios';
    $con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASSWD,$DATABASE_NAME);
    $error = "";
    if ( isset($_POST['submit']) && !isset($user, $pass)){
       $error = "e_c_1";
       header('Location: login.php?errors=' .$error);
    }
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user';";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count == 1 &&  ($pass == $row['contraseña'])){
        if ($row['cong'] == "andes"){
            header('Location: home/home.php?user=YW5kZXM==');
            exit();
        } elseif ($row['cong'] == "liniers"){
            header('Location: home/home.php?user=bGluaWVycw==');
            exit();
        }
    }else {
        $_SESSION['errors'] = "e_c_2";
        $error = $_SESSION['errors'];
        header('Location: login.php?errors='. $error);
        exit();
    }
    mysqli_close($con);
}

function upload_file($w_user, $pdf_tema){
    $DATABASE_HOST = '127.0.0.1';
    $DATABASE_USER = 'root';
    $DATABASE_PASSWD = '';
    $DATABASE_NAME = 'files';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWD, $DATABASE_NAME);
    if(mysqli_connect_errno())
    {
    echo "Failed to connect to database" .     mysqli_connect_errno();
    }
   
    
    if (isset($_FILES["pdf_input"])){
       $file_count = count(glob('files/'.$w_user.'/*'));
       $path_w_s_f = './files/'.$w_user.'/';
       $file_count_for_sql = $file_count + 1 ;
       $name_otnf = $path_w_s_f . $file_count_for_sql .".jpg";
       $command_for_convertion = "convert -density 300 -trim \"" . $_FILES["pdf_input"]["tmp_name"] . "\" -quality 100 -flatten -sharpen 0x1.0 \"" . $name_otnf . "\"";
       shell_exec($command_for_convertion);
          
       if (file_exists($name_otnf)){
          echo "<div class='good-message'>Subido con éxito, se guardó como: " . $name_otnf . "</div>";
          $full_path = './home/files/' . $w_user .'/' . $file_count_for_sql . ".jpg";
          $sql_query_to_log = "INSERT INTO `files_uploaded` (`id`, `tema`, `path`, `cong` ) VALUES ('$file_count_for_sql', '$pdf_tema[0]', '$full_path', '$w_user');";
          mysqli_query($con, $sql_query_to_log);
       } else {
          $e_c_5 = "e_c_5";
          header('Location: ../home/upload.php?errors=' . $e_c_5);
       }
     }
}
?>