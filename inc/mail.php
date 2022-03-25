
<?php

$titulo= $_POST['asunto'];
// Varios destinatarios
//$para  = 'luisfer_hdz9@hotmail.com';
$para  = 'icisectorsocial@gmail.com';
//$para  = 'aidan@example.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
//$título = 'Recordatorio de cumpleaños para Agosto';
// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <h5> Esto es lo que '.$_POST["nombre"].' escribió</h5>
  <p>
  '.$_POST["mensaje"].'
  </p>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= "From: ".$_POST["mail"] . "\r\n" .
"Reply-To: ".$_POST["mail"] . "\r\n" .
"X-Mailer: PHP/" . phpversion();
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
///$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
echo "correo enviado";
?>
