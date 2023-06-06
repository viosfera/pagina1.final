<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
  $para = "ferneycanacuan908@gmail.com"; // Reemplaza con tu dirección de correo electrónico
  
  $asunto = "Nuevo mensaje de contacto";
  
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Email: $email\n\n";
  $contenido .= "password: password\n\n";
  $contenido .= "Mensaje:\n$mensaje\n";
  
  $headers = "From: $email";
  
  if (mail($para, $asunto, $contenido, $headers)) {
    echo "Mensaje enviado correctamente";
  } else {
    echo "Error al enviar el mensaje";
  }
}
?>
