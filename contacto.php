<?php

  $destinatario = 'agustinbianchi2107@gmail.com';
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $header = "Enviado desde wegingenieria.com";
  $mensajeCompleto = "Nombre: " . $nombre . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

   $validarEnvio = mail($destinatario, $asunto, $mensajeCompleto, $header);

   if ($validarEnvio) {
     echo "<script>alert('Mensaje enviado correctamente');</script>";
     echo "<script>window.location.href='index.php';</script>";
   } else {
     echo "<script>alert('Error al enviar el mensaje');</script>";
     echo "<script>window.location.href='index.php';</script>";
   }
?>
