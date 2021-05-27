<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'programac02020@gmail.com';                     // SMTP username
    $mail->Password   = '15521118';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('programac02020@gmail.com', 'Eduardo Giorello');
    $mail->addAddress('programac02020@gmail.com');
    $mail->addAddress($_SESSION['correo']);     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Eduardo Giorello';
    $mail->Body    = '<h2 style="color:green; text-align: justify ">Este es un mensaje automatico para confirmarte que recibimos tu consulta. A la brevedad nos comunicaremos al correo que nos dejaste. muchas gracias por interresarte en nuestros servicios. Eduardo Giorello </h2> <h4>Nombre: '.$_SESSION['nombre'].' Mensaje: '. $_SESSION['mensaje'].' correo '.$_SESSION['correo'].' </h4>';
    
	$mail->send();


    
} catch (Exception $e) {
    echo "Error en el envio: {$mail->ErrorInfo}";
}


?>




