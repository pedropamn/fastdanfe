<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
use PDFMerger\PDFMerger;
require_once 'PDFMerger.php';
$id = trim($_GET['id']);
$senha = trim($_GET['senha']);



  /***************************
	********* PDF *************
	***************************/
   if (!file_exists("./pdf/{$id}")) {
		if(!mkdir("./pdf/{$id}")){
			die("ERR_CRIAR_PASTA_PDF");
		}
	}
   
   //Locais de armazenamento
	$pasta_xml = 'xml/'.$id;
	$pasta_pdf = 'pdf/'.$id;
	
	//Scandir
	$scan = scandir($pasta_xml);
	
	//Varredura de cada XML feito Upload
	foreach($scan as $file){

		if (!is_dir("{$pasta_xml}/$file")){
			
			/* VIA WEBDANFE
			$xmldata = file_get_contents($ .'/'.$file);	
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,"http://www.webdanfe.com.br/danfe/GeraDanfe.php");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('arquivoXml' => $xmldata)));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec($ch);
			*/
			
			$localxml = $pasta_xml.'/'.$file;	
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$_SERVER['SERVER_NAME']."/spedda/danfe.php?id={$id}");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('localxml' => $localxml)));
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec($ch);
			curl_close ($ch);
			
			$fp = fopen($pasta_pdf.'/'.$file.'.pdf','a+');
			fwrite($fp,$server_output);
			fclose($fp);		
		
		}
	}
		
	
		 

			 /***************************
			 ********** ZIP *************
			 ***************************/
				 
			   if (!file_exists("./zip/{$id}")) {
					if(!mkdir("./zip/{$id}")){
						die("ERR_CRIAR_PASTA_ZIP");
					}
				}
				
				//Merge
				
				//Função para check de PDF válido 
				function check_valid_pdf($path){
					$finfo = finfo_open(FILEINFO_MIME_TYPE);
					foreach (glob($path) as $filename) {
						if(finfo_file($finfo, $filename) === 'application/pdf') {
							$valid = true;
						} else {
							 $valid = false;
						}
					}
					finfo_close($finfo);
					
					return $valid;
				}
				
				$pdf = new PDFMerger();
				$directory = $pasta_pdf;
				$scanned_directory = array_diff(scandir($directory), array('..', '.'));
				foreach($scanned_directory as $entry){
					
					//Adiciona no Merge apenas se for válido
					if(check_valid_pdf($pasta_pdf . '/' .$entry) == true){
						$pdf->addPDF($pasta_pdf . '/' .$entry, 'all');
					}
					else{
						echo "ERR_HA_PDF_NAO_VALIDO";
					}
				}
				$pdf->merge('file', $_SERVER['DOCUMENT_ROOT'] . '/' . $pasta_pdf.'/JUNTO.pdf');  
				//$pdf->merge('file', $_SERVER['DOCUMENT_ROOT'] . '/fd/' . $pasta_pdf.'/JUNTO.pdf');  
				
				
				$pasta_zip = 'zip/'.$id;
				
				//Variáveis escapas para usar no shell_exec
				$esc_pasta_zip = escapeshellarg($pasta_zip);
				$esc_id = escapeshellarg($id);
				$esc_pasta_pdf = escapeshellarg($pasta_pdf);
				$esc_senha = escapeshellarg($senha);

				if($senha){
					shell_exec("zip -r {$esc_pasta_zip}/danfes_{$esc_id}.zip {$esc_pasta_pdf} -P {$esc_senha}");
				}
				else{
					shell_exec("zip -r {$esc_pasta_zip}/danfes_{$esc_id}.zip {$esc_pasta_pdf}");
				}
				
				
				/*$zip = new ZipArchive;
				if ($zip->open($pasta_zip ."/danfes_{$id}.zip", ZipArchive::CREATE) === TRUE){
					if ($handle = opendir($pasta_pdf)){
						// Add all files inside the directory
						while (false !== ($entry = readdir($handle))){
							if ($entry != "." && $entry != ".." && !is_dir($pasta_pdf . '/' . $entry))
							{
								$zip->addFile($pasta_pdf . '/' . $entry);
								if($senha){
									$zip->setPassword($senha);
									$zip->setEncryptionName($pasta_pdf . '/' . $entry, ZipArchive::EM_AES_256);	//libzip tem que ser maior que 1.1.2	
								}
														
							}
						}
							
						closedir($handle);
						
					}
										
					$zip->close();
				
				}*/
?>
