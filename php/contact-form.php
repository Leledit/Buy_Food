<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// Enter your email address below.
$to = 'vinialex@icloud.com';

$subject = $_POST['subject'];

if($to) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$fields = array(
		0 => array(
			'text' => 'Nome do Cliente Buy Food: ',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Endereço de Email: ',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'Assunto da Mensagem: ',
			'val' => $_POST['subject']
		),
		3 => array(
			'text' => 'Menssagem: ',
			'val' => $_POST['message']
		),
		4 => array(
			'text' => 'Buy Food agradece a preferência! ',
			'val' => $_POST['category']
		)

	);

	$message = "Essa mensagem foi enviada pelo site Buy Food! para saber mais acesse www.buyfood.com.br agradecemos pela preferência :) ";

	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}

	$headers = '';
	$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$headers .= "Reply-To: " .  $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	if (mail($to, $subject, $message, $headers)){
		$arrResult = array ('response'=>'success');
	} else{
		$arrResult = array ('response'=>'error');
	}

	echo json_encode($arrResult);

} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>
