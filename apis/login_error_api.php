<?php 
function error_manage($error){
    if(!empty($error)){
        if ( $error === "e_c_1"){
           $error = "No se proporcionaron credenciales.";
        } elseif ( $error === "e_c_2") {
	       $error = "Las credentiales dadas no son las correctas.";
        } elseif ( $error === "e_c_5"){
           $error = "No se pudo subir el archivo";
        }
        echo '<div class="error-message">' . $error . '</div>';
        
    }
}
?>
