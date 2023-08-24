<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  // Configuración del correo
  $to = 'abigailcanaan@gmail.com';
  $subject = 'Nuevo mensaje de contacto';
  $message = "Nombre: $nombre\n\nEmail: $email\n\nMensaje: $mensaje";

  // Envío del correo
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "¡Correo enviado correctamente!";
  } else {
    echo "Hubo un error al enviar el correo.";
  }
}
?>





