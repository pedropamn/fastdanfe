<?php
//$token = $_GET['token'];

 $argv = $_SERVER['argv'];
 $token = $argv[1]; 
 if($token != 'fastdanfe_tok'){
	die('AUTH');
} 
	date_default_timezone_set ("America/Sao_Paulo");
	
	//Função de datetime (yyyy-mm-dd hh:mm)
	function dif_entre_datetimes($dt1,$dt2){
		$datetime1 = new DateTime($dt1);
		$datetime2 = new DateTime($dt2);
		$interval = $datetime1->diff($datetime2);
		//return $interval->format('%dd %hh %im');
		$dias = $interval->format('%dd');
		$horas = $interval->format('%hh');
		$minutos = $interval->format('%im');
		
		$minutos_totais = ($dias * 24) + ($horas * 60) + $minutos;
		return $minutos_totais;
	}
	
	//Deleta pastas ou arquivos
	function deleteDir($path) {
		if (empty($path)) { 
			return false;
		}
		return is_file($path) ?
				@unlink($path) :
				array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
	}
	
	//Função que deleta a pasta, de acordo com o tempo limite. filectime() -> Windows: Data de criação | Linux: Data de modificação
	function deleta_pasta($pasta){		
		$data_criacao_modificacao = date ("Y-m-d H:i", filectime($pasta));
		$agora = date ("Y-m-d H:i");		
		$dif = dif_entre_datetimes($data_criacao_modificacao, $agora); //Em minutos
		echo "Data de modif: {$data_criacao_modificacao} --- Agora: {$agora} -- $dif: {$dif}<br>";
		if($dif >= 2){
			deleteDir($pasta);
		}
		
	}
	
	//Scan e chamada da função de deletar
	$scan_xml = scandir(__DIR__ . '/xml/');
	$scan_pdf = scandir(__DIR__ . '/pdf/');
	$scan_zip = scandir(__DIR__ . '/zip/');
	$scan_logos = scandir(__DIR__ . '/logos/');
	
	foreach($scan_xml as $pasta){
		if ($pasta != "." && $pasta != ".." && is_dir(__DIR__ . '/xml/' .$pasta)){
			deleta_pasta(__DIR__ . '/xml/'.$pasta);
		}		
	}
	
	foreach($scan_pdf as $pasta){
		if ($pasta != "." && $pasta != ".." && is_dir(__DIR__ . '/pdf/' .$pasta)){
			deleta_pasta(__DIR__ . '/pdf/'.$pasta);
		}		
	}
	
	foreach($scan_zip as $pasta){
		if ($pasta != "." && $pasta != ".." && is_dir(__DIR__ . '/zip/' .$pasta)){
			deleta_pasta(__DIR__ . '/zip/'.$pasta);
		}		
	}
	
	foreach($scan_logos as $logo){
		if ($logo != "." && $logo != ".." && $logo != "index.html"){
			unlink(__DIR__.'/logos/'.$logo);
		}		
	}
?>
