<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@example.com';
        $mail->Password = 'your-email-password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set up sender and recipient
        $mail->setFrom('your-email@example.com', 'Your Name');
        $mail->addAddress('recipient@example.com', 'Recipient Name');

        // Set up email content
        $mail->Subject = $subject;
        $mail->Body = "<p><strong>Name:</strong> $name</p>";
        $mail->Body .= "<p><strong>Email:</strong> $email</p>";
        $mail->Body .= "<p><strong>Subject:</strong> $subject</p>";
        $mail->Body .= "<p><strong>Message:</strong> $message</p>";
        $mail->isHTML(true);

        // Send the email
        $mail->send();
        echo "Your message has been sent successfully.";
    } catch (Exception $e) {
        echo "Oops! An error occurred while sending the message: " . $mail->ErrorInfo;
    }
}
?>