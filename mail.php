<?php
/*
// the message
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg_campo = $_POST['mensagem'];
$msg = "Nome:{$nome} -- Email: {$email} -- Mensagem: {$msg_campo}";
// send email
$data = array("value1" => $msg);                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('https://maker.ifttt.com/trigger/msg_site_nfe/with/key/thekey');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
if($result){
  echo "Mensagem enviada. Obrigado! <a href='index.php'>Voltar</a>";
 
}
else{
  echo "Erro ao enviar. Tente novamente <a href='index.php'>Voltar</a>";
  sleep(2);
}
//header("Location:index.php");
*/

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$message = $_POST['mensagem'];


	mail($to, $subject, $message);
	header("Location:index.php");
?>
