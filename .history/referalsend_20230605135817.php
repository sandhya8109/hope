<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);
var_dump($mail);
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
	<tr><td>Participant's Full Name: </td><td>" . $_POST["fullname"] . "</td></tr>
    <tr><td>Date of Birth: </td><td>" . $_POST["date"] . "</td></tr>
    <tr><td>Other names(if applicable): </td><td>" . $_POST["othername"] . "</td></tr>
    <tr><td>Gender:</td><td>" . $_POST["gender"] . "</td></tr>
    <tr><td>Residental Address: </td><td>" . $_POST["address"] . "</td></tr>
    <tr><td>Postal Address(if different): </td><td>" . $_POST["postal"] . "</td></tr>
    <tr><td>Contact Number: </td><td>" . $_POST["cnum"] . "</td></tr>
    <tr><td>Does the Participant identify as:</td><td>" . $_POST["a,t,b,n"] . "</td></tr>
    <tr><td>Has the Participant consented to this
    referral? </td><td>" . $_POST["y,n"] . "</td></tr>
    <tr><td>Primary Diagnosis: (please attach supporting documentation)</td><td>" . $_POST["primary"] . "</td></tr>
    <tr><td>Secondary Disability(ies) or other presenting issues: </td><td>" . $_POST["second"] . "</td></tr>
        <tr><td>Communication status: </td><td>" . $_POST["status"] . "</td></tr>
    <tr><td>Communication assessment: </td><td>" . $_POST["complete ,not,nap"] . "</td></tr>
       <tr><td>Personal Mobility Aids: </td><td>" . $_POST["aids"] . "</td></tr>
       <tr><td>Personal Mobility Aids Required: </td><td>" . $_POST["h,c,s"] . "</td></tr>
       <tr><td>Any other Assistive Devices: </td><td>" . $_POST["any"] . "</td></tr>
       <tr><td>Does Participant have challenging behaviours? </td><td>" . $_POST["behavior"] . "</td></tr>
   <tr><td>Does Participant have a current Behaviour Support Plan(PBSP)?: </td><td>" . $_POST["pbspy, pbapn"] . "</td></tr>
    <tr><td>Please tick the documents that have been provided: </td><td>" . $_POST["pbsp, ndis,risk,plan,"] . "</td></tr>
    <tr><td> Communication assessment </td><td>" . $_POST["ass, oc,co,ot"] . "</td></tr>
     </table>
";

$mail->Body = $message;

try {
    $mail->send();

    echo "<script>alert('Message sent successfully.');</script>";
    echo "<script>window.location.href = 'refer.php';</script>";

} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>