<?php 
require "GUMP-master/gump.class.php";
require "EmailTemplate/EmailTemplate.php";
require("class.phpmailer.php");
require "../admin-sorteos/Recursos/models/ColaboradorModel.php";

$gump = new GUMP();
$_POST = $gump->sanitize($_POST); // You don't have to sanitize, but it's safest to do so.
$gump->validation_rules(array(
	'nombre' => 'required|min_len,4',
	'phone' => 'required|numeric',
	'email' => 'required|valid_email',
	'ciudad' => 'required',
	'codigopostal' => 'required|numeric|min_len,5|max_len,6',
	'sexo' => 'required',
	'edad' => 'required',
	'numero_de_boletos' => 'required'
));
$gump->filter_rules(array(
	'nombre' => 'trim|sanitize_string',
	'email'    => 'trim|sanitize_email'
));
$validated_data = $gump->run($_POST);

if($validated_data === false) {
	echo $gump->get_readable_errors(true);
} 
else{

	//Add Date To Array Data
	$validated_data['created_date'] = date("Y-m-d");

	// Save On Data Base
	$colaborador = new ColaboradorModel();
	$colaborador->save($validated_data);

	// Send Email
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->setFrom('info@sorteosuabc.mx', 'Colaborador Sorteos UABC');
	//$mail->addAddress('jose@guruc.com.mx', 'Colaborador Sorteos UABC');
	$mail->addAddress('contacto@sorteosuabc.mx', 'Colaborador Sorteos UABC');
	//$mail->addAddress('jose@guruc.com.mx', 'Colaborador Sorteos UABC');
	//$mail->AddBCC("atencion@guruc.com.mx");
	$mail->Subject = "Nueva solicitud para ser colaborador en Sorteos UABC";

	$body = new EmailTemplate($validated_data);
	$mail->Body = $body->getTemplateHtml();
	$mail->AltBody = "Mensaje desde su sitio web (Sorteos UABC)";
	if(!$mail->send()) {
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	} else {
	  ?>
	  <script type="text/javascript" >
	  alert("Gracias por contactarnos, en breve nos pondremos en contacto.");
	  window.location.href ="https://www.sorteosuabc.mx";
	  </script>
	  <?php
	}
}
?>
