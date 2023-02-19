<?php
	$id_a_checar = $_GET['id'];
	
	if(file_exists("zip/{$id_a_checar}/danfes_{$id_a_checar}.zip")){
		echo "ok";
	}
?>