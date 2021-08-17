<?php
$destinatario = 'luketaapeeola@gmail.com';
// Correo al que se enviará el mensaje
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$email = $_POST['message'];
$header = "Enviado desde Aircaption";
$mensajeCompleto = $message ."\n De :" . $name;
mail($destinatario, $subject, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente!')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>