<?php


$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Sabor = $_POST['Sabor'];
$Tamaño = $_POST['Tamaño'];
$Fecha = $_POST['Fecha_Entrega'];
$Telefono = $_POST['Telefono'];
$Personaje = $_POST['Personaje'];
$Imagen = $_POST['Imagen'];
$Direccion = $_POST['Direccion'];
$M = htmlspecialchars($_POST['Mensaje']);
$Img = $_FILES['Imagen'];


 

$to = "lindaruedaflores@gmail.com";
$subject = "Cotizacion Nini & Co.";


$message = "<h3>De: $Nombre <h3>";
$message .= "Correo: $Email <br>";
$message .= "Telefono: $Telefono <br>";
$message .= "Dirección: $Direccion <br>"; 
$message .= "Sabor: $Sabor <br>";
$message .= "Tamaño: $Tamaño <br>";
$message .= "Fecha de Entrega: $Fecha <br>";
$message .= "Personaje: $Personaje <br>";
$message .= "Mensaje: $M <br>";
//$message .= "Imagen : $Img";



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';




$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jose.jrmg27@gmail.com';                 // SMTP username
    $mail->Password = '//MgecGd18S';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('jose.jrmg27@gmail.com', 'Nini & Co. Pasteleria');
    $mail->addAddress($to, 'Nini & Co.'); 
        // Add a recipient
 

    //Attachments
    
    // $mail->addAttachment('/var/tmp/file.tar.gz');          Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');     Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AddAttachment($Img['tmp_name'], $Img['name']);
    $mail->send();
    echo "
                <script language='JavaScript'>
                var mensaje = 'Cotización Enviada Espere Respuesta de Nini & Co. A Su Correo';
                alert(mensaje);
                </script>";
        echo "
                <script>
                 document.location.href = 'ordenar.html';
                </script> "; 

} catch (Exception $e) {
    echo 'Hubo Un Error Al Enviar Su Cotizacion: ', $mail->ErrorInfo;
}






?>