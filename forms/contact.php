<?php

  $destinatario = 'agustinbianchi2107@gmail.com';
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $header = "Enviado desde wegingenieria.com";
  $mensajeCompleto = "Nombre: " . $nombre . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

  mail($destinatario, $asunto, $mensajeCompleto, $header);
  echo "<script>alert('Mensaje enviado');</script>";
  echo "<script>location.href='index.html'</script>";
?>
