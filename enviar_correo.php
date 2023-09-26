<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombres"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Configura los encabezados del correo
    $headers = "From: $correo" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

    // Destinatario del correo (tu dirección de correo)
    $destinatario = "juan.quevedo.troncoso@gmail.com"; // Reemplaza con tu dirección de correo

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto de UtalMarket";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre <br>";
    $cuerpo .= "Correo: $correo <br>";
    $cuerpo .= "Mensaje: $mensaje";

    // Envía el correo
    $mailEnviado = mail($destinatario, $asunto, $cuerpo, $headers);

    if ($mailEnviado) {
        // Llama a la función para mostrar el modal de confirmación
        echo '<script>displayModal();</script>';
    } else {
        // Si hay un problema con el envío del correo, puedes redirigir a una página de error o mostrar un mensaje de error.
        echo "Hubo un error al enviar el mensaje.";
    }
    
}
?>
