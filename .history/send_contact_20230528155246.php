<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up the recipient email address
    $to = 'sandyrimal07@gmail.com';

    // Set up the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Compose the email message
    $email_message = "<p><strong>Name:</strong> $name</p>";
    $email_message .= "<p><strong>Email:</strong> $email</p>";
    $email_message .= "<p><strong>Subject:</strong> $subject</p>";
    $email_message .= "<p><strong>Message:</strong> $message</p>";

    // Send the email
    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Oops! An error occurred while sending the message.";
    }
}
?>