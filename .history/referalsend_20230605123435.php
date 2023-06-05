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
	<tr><td>First name: </td><td>" . $_POST["participantfn"] . "</td></tr>
    <tr><td>Other name: </td><td>" . $_POST["participanton"] . "</td></tr>
    <tr><td>Date of birth: </td><td>" . $_POST["participantbirth"] . "</td></tr>
    <tr><td>Gender: </td><td>" . $_POST["gender"] . "</td></tr>
    <tr><td>Phone /number: </td><td>" . $_POST["participantno"] . "</td></tr>
    <tr><td>participantemail: </td><td>" . $_POST["participantemail"] . "</td></tr>
    <tr><td>Address.: </td><td>" . $_POST["participantaddress"] . "</td></tr>
    <tr><td>Postal Address: </td><td>" . $_POST["postal"] . "</td></tr>
    <tr><td>Has the Participant consented to this
    referral? </td><td>" . $_POST["diagonosis"] . "</td></tr>
    <tr><td>Secondary Disability(ies) or other presenting issues: </td><td>" . $_POST["second"] . "</td></tr>
    <tr><td>Primary Diagnosis: (please attach supporting documentation)</td><td>" . $_POST[""] . "</td></tr>
    <tr><td>Communication status: </td><td>" . $_POST["communication"] . "</td></tr>

    <tr><td>Communication assessment: </td><td>" . $_POST["complete ,incomplete,not"] . "</td></tr>
   
    <tr><td>Personal Mobility Aids: </td><td>" . $_POST["Hoisting, commode, steady,other"] . "</td></tr>
    <tr><td>Country of Birth: </td><td>" . $_POST["birth"] . "</td></tr>
    <tr><td>Does Participant have challenging behaviours?: </td><td>" . $_POST["behavior"] . "</td></tr>
    <tr><td>Citizenship status: </td><td>" . $_POST["citizenship"] . "</td></tr>
    <tr><td>Does Participant have a current Behaviour Support Plan(PBSP)?: </td><td>" . $_POST["pbspy, pbapn"] . "</td></tr>
    <tr><td>Please tick the documents that have been provided: </td><td>" . $_POST["pbsp, ndis,tisk,plan,"] . "</td></tr>
    <tr><td> Communication assessment </td><td>" . $_POST["com"] . "</td></tr>
    <tr><td> Occupational Therapy assessment  </td><td>" . $_POST["oc"] . "</td></tr>
    <tr><td>What does the participant identify as?: </td><td>" . $_POST["fav_language" . "language"] . "</td></tr>
   
    <tr><td>Referral First name: </td><td>" . $_POST["first_name"] . "</td></tr>
    <tr><td>Referral number: </td><td>" . $_POST["number"] . "</td></tr>
    <tr><td>Referral Position: </td><td>" . $_POST["position"] . "</td></tr>
    <tr><td>organization: </td><td>" . $_POST["organization"] . "</td></tr>
	<tr><td>message: </td><td>" . $_POST["m"] . "</td></tr>
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