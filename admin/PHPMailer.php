<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Setări SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Serverul SMTP Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'develop.testing1755@gmail.com'; // Adresa ta Gmail
    $mail->Password   = 'testsiteteo';     // Parola aplicație generată în contul Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Expeditor și destinatar
    $mail->setFrom('develop.testing1755@gmail.com', 'Apopi Mihai');
    $mail->addAddress($email, $username); // Destinatarul din formular

    // Subiect și corpul mesajului
    $mail->isHTML(true);
    $mail->Subject = 'Test mail';
    $mail->Body    = 'Welcome, ' . $username . '. This is an automated message!';

    // Trimiterea e-mailului
    $mail->send();
    echo json_encode(array('success'=> 'true','message'=> 'Trimis mail cu succes'));
} catch (Exception $e) {
    echo json_encode(array('success'=> 'false','message'=> 'Eroare la trimitere e-mail: ' . $mail->ErrorInfo));
}

?>