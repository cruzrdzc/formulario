<?php
  $destinatario = 'romxdgg@gmail.com';

  $nombre = $_POST['nombre'];
  $asunto = $_POST['ausnto'];
  $mensaje = $_POST['mensaje'];
  $email = $_POST['email'];



  $header = "Enviado desde la pagina de Cristian";
  $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre
  
  mail($destinatario, $asunto, $mensaje, $header);

  echo "<script>alert('correo enviado')</script>";
  echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";


?>