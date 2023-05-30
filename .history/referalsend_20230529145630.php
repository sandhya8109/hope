<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 0; //0 or 2 

//Set PHPMailer to use SMTP.
$mail->isSMTP();

//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Provide username and password     
$mail->Username = "chelibeti7@gmail.com";
$mail->Password = "zwkddebtffpazmlq";

//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";

//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "chelibeti7@gmail.com";
$mail->FromName = "USER";

$mail->addAddress("chelibeti7@gmail.com", "Chelibeti");

$mail->isHTML(true);
$mail->Subject = "Contact Form Email";

$message = "
<table>
	<tr><td>Name: </td><td>" . $_POST["first_name"] . "</td></tr>
	<tr><td>Mobile No.: </td><td>" . $_POST["last_name"] . "</td></tr>
    <tr><td>number: </td><td>" . $_POST["number"] . "</td></tr>
    <tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>
	<tr><td>position: </td><td>" . $_POST["first_name"] . "</td></tr>
	<tr><td>organization: </td><td>" . $_POST["organization"] . "</td></tr>
	<tr><td>message: </td><td>" . $_POST["m"] . "</td></tr>
	<tr><td>service: </td><td>" . $_POST["yes"] . "</td></tr>
    <tr><td>address: </td><td>" . $_POST["address"] . "</td></tr>
	<tr><td>participate.: </td><td>" . $_POST["participate"] . "</td></tr>
	<tr><td>does: </td><td>" . $_POST["does"] . "</td></tr>
	<tr><td>idea: </td><td>" . $_POST["idea"] . "</td></tr>
    <tr><td>religion: </td><td>" . $_POST["religion"] . "</td></tr>
	<tr><td>citizenship: </td><td>" . $_POST["citizenship"] . "</td></tr>
	<tr><td>status: </td><td>" . $_POST["status"] . "</td></tr>
	<tr><td>birth: </td><td>" . $_POST["birth"] . "</td></tr>
    <tr><td>zip: </td><td>" . $_POST["zip"] . "</td></tr>
    <tr><td>status: </td><td>" . $_POST["status"] . "</td></tr>
	<tr><td>participantaddress.: </td><td>" . $_POST["participantaddress"] . "</td></tr>
	<tr><td>participantemail: </td><td>" . $_POST["participantemail"] . "</td></tr>
	<tr><td>participantno: </td><td>" . $_POST["participantno"] . "</td></tr>
    <tr><td>gender: </td><td>" . $_POST["gender"] . "</td></tr>
	<tr><td>participantbirth: </td><td>" . $_POST["participantbirth"] . "</td></tr>
	<tr><td>participantln: </td><td>" . $_POST["participantln"] . "</td></tr>
	<tr><td>participantfn: </td><td>" . $_POST["participantfn"] . "</td></tr>
    </table>
";

$mail->Body = $message;

try {
    $mail->send();

    echo "<script>alert('Message sent successfully.');</script>";
    echo "<script>window.location.href = 'index.php';</script>";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>