<?php 
require("class.phpmailer.php");

function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
}

// Guarda campos del formulario
$nombre = test_input($_POST['nombre']);
$correo = test_input($_POST['email']);
$telefono = test_input($_POST['phone']);
$como = test_input($_POST['como']);
$comentarios = test_input($_POST['comentarios']);

// Mailer
$mail = new PHPMailer();
$mail->From = $correo; 
$mail->FromName = $nombre; 
$mail->Timeout=30;
//$mail->AddAddress("contacto@sorteosuabc.mx");
$mail->AddAddress("jose@guruc.com.mx");
$mail->SetFrom($correo, $nombre);
$mail->AddBCC("atencion@guruc.com.mx");
$mail->Subject = "Nuevo Mensaje desde Sorteos UABC";
$mail->SMTPDebug  = 2;

$body ='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
  <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
  <title>Single Column</title>
  
  <style type="text/css">
body {
  margin: 0;
  padding: 0;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

table {
  border-spacing: 0;
}

table td {
  border-collapse: collapse;
}

.ExternalClass {
  width: 100%;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height: 100%;
}

.ReadMsgBody {
  width: 100%;
  background-color: #ebebeb;
}

table {
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
}

img {
  -ms-interpolation-mode: bicubic;
}

.yshortcuts a {
  border-bottom: none !important;
}

@media screen and (max-width: 599px) {
  .force-row,
  .container {
    width: 100% !important;
    max-width: 100% !important;
  }
}
@media screen and (max-width: 400px) {
  .container-padding {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
}
.ios-footer a {
  color: #aaaaaa !important;
  text-decoration: underline;
}
</style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- 100% background wrapper (grey background) -->
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
  <tr>
    <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

      <br>

      <!-- 600px container (white background) -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
        <tr>
          <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
            Sorteos UABC
          </td>
        </tr>
        <tr>
          <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
            <br>

<div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">Mensaje de '.utf8_encode($nombre).'</div>
<br>

<div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
  Nombre: '.utf8_encode($nombre).'
  <br><br>
  Correo: '.$correo.'
  <br><br>
  Tel??fono: '.$telefono.'
  <br><br>
  ??C??mo supo de nosotros?: '.utf8_encode($como).'
  <br><br>
  Comentarios: '.utf8_encode($comentarios).'
  <br><br>
</div>

          </td>
        </tr>
        <tr>
          <td class="container-padding footer-text" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px">
            <br><br>
            Sorteos UABC
            <br><br>
          </td>
        </tr>
      </table>
<!--/600px container -->


    </td>
  </tr>
</table>
<!--/100% background wrapper-->

</body>
</html>
';

$mail->Body = $body;
$mail->AltBody = "Mensaje desde su sitio web (Sorteos UABC)";
$exito = $mail->Send();
$intentos=1; 
while ((!$exito) && ($intentos < 2)) {
	sleep(5);
	$exito = $mail->Send();
	$intentos=$intentos+1;	
}		  
if(!$exito){
	echo "false";	
}
else {
	echo "";
} 
?>
<script type="text/javascript" >
alert("Gracias por contactarnos, en breve nos pondremos en contacto.");
window.location.href ="https://www.sorteosuabc.mx";
</script>
