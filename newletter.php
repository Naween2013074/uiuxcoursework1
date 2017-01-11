<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$senders_email = $_POST['newsletter_email'];

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'setwemudapub@gmail.com';
$mail->Password = 'setwemudapub123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('from@example.com', 'SetWeumdaPub');
$mail->addAddress('naween2013074@gmail.com', 'Naween Fonseka');
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC($senders_email);
$mail->addBCC('bcc@example.com');

$mail->addAttachment('resources/images/home/setwemudapb_footer.PNG');
$mail->isHTML(true);

$mail->Subject = 'You have been successfully subscribed';
$mail->Body = 'You have successfully subscribed to the Setwemuda Pub Newsletter';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    header('Location: newsletter_subscription.php');
    exit;
} else {
    header('Location: newsletter_subscription.php');
    exit;
}
?>


