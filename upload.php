<?php

	/***************************
	********* UPLOAD ***********
	***************************/
	
	$id = $_GET['id'];
	$filename = $_FILES['fileToUpload']['name'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$mime = mime_content_type($_FILES['fileToUpload']['tmp_name']);
	
	$allowed_mime = ['text/plain','text/xml'];
	$allowed_ext = ['xml'];
	if(in_array($mime,$allowed_mime) && in_array($ext,$allowed_ext)){
		if (!file_exists("./xml/{$id}")) {
			if(!mkdir("./xml/{$id}")){
				echo "Erro ao criar um subdiretório no diretório dos XML ";
			}
		}
	
		//Seta locais para upload
		$uploaddir = "./xml";
		$uploadfile = $uploaddir . '/' . $id . '/' . basename($_FILES['fileToUpload']['name']);
		
		//Move
		if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
			  echo "O arquivo é valido e foi carregado com sucesso.\n";	
			
	   } else {
			 echo "Algo está errado aqui!\n";
	   }
	}
	else{
		die("ARQ_NAO_ACEITO");
	}

		
	
?>
