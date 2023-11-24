<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.elasticemail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'craigstrutman@gmail.com';
    $mail->Password = '61FF8BB6200D4E7424E8ACF2683B8C771E49';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    // Sender and recipient
    $mail->setFrom('bankoleHandworks@187.com', 'AICE');
    $mail->addAddress('almightyola@yandex.com', 'ola');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email.';

    // Send the email
    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
