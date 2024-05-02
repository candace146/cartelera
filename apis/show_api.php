<?php
if (isset($_SESSION['w_user'])){
	$w_user = $_SESSION['w_user'];
}
	
function showing($w_user){
	//session_start();
	$DATABASE_HOST = '127.0.0.1';
	$DATABASE_USER = 'root';
	$DATABASE_PASSWD = '';
	$DATABASE_NAME = 'files';
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWD, $DATABASE_NAME);
	
	$themes =[	  'predicacion' => 'predicacion', 
				  'cartas_varias' => 'cartas_varias',
				  'contabilidad' => 'contabilidad',
				  'recordatorios' => 'recordatorios',
				  'grupos_predicacion' => 'grupos_predicacion',
				  'reunion_e_semana' => 'reunion_e_semana',
				  'reunion_f_semana' => 'reunion_f_semana',
				  'acomodadores_microfonistas' => 'acomodadores_microfonistas',
				  'arreglo_limpieza' => 'arreglo_limpieza',
				  'audio_video' => 'audio_video',
				  'fechas_importantes' => 'fechas_importantes'
            ];

	$img_path = []; // Array donde se van a guardar los paths de cada foto, no se si esto esta rozando un array multidimensional.
	foreach($themes as $theme){
		$sql = "SELECT * FROM files_uploaded WHERE tema = '$theme' AND cong = '$w_user';";
		$result = mysqli_query($con, $sql);
		if ($result){
			while ($row = mysqli_fetch_assoc($result)){
				global $img_path;
				if ($row['tema'] == "predicacion"){
                   $img_path["predicacion"][] = $row['path'];
				} 
				if ($row['tema'] == "cartas_varias"){
                   $img_path["cartas_varias"][] = $row['path'];
				} 
				if ($row['tema'] == "contabilidad"){
				   $img_path["contabilidad"][] = $row['path'];
				} 
				if ($row['tema'] == "recordatorios"){
					$img_path["recordatorios"][] = $row['path'];
				} 
				if ($row['tema'] == "grupos_predicacion"){
					$img_path["grupos_predicacion"][] = $row['path'];
				} 
				if ($row['tema'] == "reunion_e_semana"){
					$img_path["reunion_e_semana"][] = $row['path'];
				} 
				if ($row['tema'] == "reunion_f_semana"){
					$img_path["reunion_f_semana"][] = $row['path'];
				} 
				if ($row['tema'] == "acomodadores_microfonistas"){
					$img_path["acomodadores_microfonistas"][] = $row['path'];
				} 
				if ($row['tema'] == "arreglo_limpieza"){
					$img_path["arreglo_limpieza"][] = $row['path'];
				} 
				if ($row['tema'] == "audio_video"){
					$img_path["audio_video"][] = $row['path'];
				} 
				if ($row['tema'] == "fechas_importantes"){
					$img_path["fechas_importantes"][] = $row['path'];
				} 
			}
		}else {
			echo "Error en la consulta SQL:" . mysqli_error($con);
		}
	}
	
}

?>