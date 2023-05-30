<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['address'];

    // Set up the recipient email address
    $to = 'chelibeti7@gmail.com';
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'chelibeti7@gmail.com';
        $mail->Password = 'zwkddebtffpazmlq';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set up sender and recipient
        $mail->setFrom("chelibeti7@gmail.com", "Chelibeti");
        $mail->addAddress("chelibeti7@gmail.com", "Chelibeti");

        // Set up the email headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Compose the email message
        $email_message = "<p><strong>Name:</strong> $name</p>";
        $email_message .= "<p><strong>Email:</strong> $email</p>";
        $email_message .= "<p><strong>Phone:</strong> $phone</p>";
        $email_message .= "<p><strong>Message:</strong> $message</p>";

        // Send the email
        $success = mail($to, $subject, $email_message, $headers);

        if ($success) {
            echo "Your message has been sent successfully.";
        } else {
            echo "Oops! An error occurred while sending the message.";
        }
    }
}
?>