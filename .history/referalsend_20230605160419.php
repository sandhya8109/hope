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
	<tr><td>Participant's Full Name: </td><td>" . $_POST["fullname"] . "</td></tr>
    <tr><td>Date of Birth: </td><td>" . $_POST["birth"] . "</td></tr>
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
    <tr><td>Communication assessment: </td><td>" . $_POST["complete"] . $_POST["not"] . $_POST["nap"] . "</td></tr>
       <tr><td>Personal Mobility Aids: </td><td>" . $_POST["aids"] . "</td></tr>
       <tr><td>Personal Mobility Aids Required: </td><td>" . $_POST["h,c,s"] . "</td></tr>
       <tr><td>Any other Assistive Devices: </td><td>" . $_POST["any"] . "</td></tr>
       <tr><td>Does Participant have challenging behaviours? </td><td>" . $_POST["behavior"] . "</td></tr>
   <tr><td>Does Participant have a current Behaviour Support Plan(PBSP)?: </td><td>" . $_POST["pbspy, pbapn"] . "</td></tr>
    <tr><td>Please tick the documents that have been provided: </td><td>" . $_POST["pbsp, ndis,risk,plan,"] . "</td></tr>
    <tr><td> Communication assessment </td><td>" . $_POST["ass, oc,co,ot"] . "</td></tr>
   
    <tr><td>Requested ratio of Support: Day </td><td>" . $_POST["1"] . $_POST["2"] . $_POST["3"] . $_POST["4"] . "</td></tr>
    <tr><td>Requested ratio of Support: Night </td><td>" . $_POST["5"] . $_POST["6"] . $_POST["7"] . $_POST["8"] . "</td></tr>
    <tr><td>Requested ratio of Support: Community Access  </td><td>" . $_POST["9"] . $_POST["10"] . $_POST["11"] . $_POST["12"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Monday hr/time: </td><td>" . $_POST["hr1"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Monday activity: </td><td>" . $_POST["Ac1"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: tuesday hr/time: </td><td>" . $_POST["hr2"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: tuesday activity: </td><td>" . $_POST["Ac2"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: wednesday hr/time: </td><td>" . $_POST["hr3"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: wednesday activity: </td><td>" . $_POST["Ac3"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Thursday hr/time: </td><td>" . $_POST["hr4"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Thursday activity: </td><td>" . $_POST["Ac4"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Friday hr/time: </td><td>" . $_POST["hr5"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Friday activity: </td><td>" . $_POST["Ac5"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Saturday hr/time: </td><td>" . $_POST["hr6"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Saturday activity: </td><td>" . $_POST["Ac6"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Sunday hr/time: </td><td>" . $_POST["hr7"] . "</td></tr>
    <tr><td>Current Community Access/Day Service: Sunday activity: </td><td>" . $_POST["Ac7"] . "</td></tr>
     <tr><td>passive </td><td>" . $_POST["p"] . "</td></tr>
    <tr><td>active:</td><td>" . $_POST["ac"] . "</td></tr>

    <tr><td>NDIS Plan Approved? </td><td>" . $_POST["ay"] . $_POST["an"] . $_POST["ap"] . $_POST["nc"] . "</td></tr>
    <tr><td>NDIS Number: </td><td>" . $_POST["nm"] . "</td></tr>
    <tr><td>>Plan Start Date: </td><td>" . $_POST["pd"] . "</td></tr>
    <tr><td>Plan End Date: </td><td>" . $_POST["em"] . "</td></tr>
    <tr><td>>If NDIS not funded,What is the Funding Source? </td><td>" . $_POST["fd"] . "</td></tr>
    <tr><td>NDIS Name: </td><td>" . $_POST["Nm"] . "</td></tr>
    <tr><td>NDIS Organization: </td><td>" . $_POST["NO"] . "</td></tr>
    <tr><td>NDIS Email </td><td>" . $_POST["NE"] . "</td></tr>
    <tr><td>NDIS Phone: </td><td>" . $_POST["NP"] . "</td></tr>
    <tr><td>>NDIS Plan Management: </td><td>" . $_POST["AM"] . $_POST["PM"] . $_POST["SM"] . "</td></tr>
    <tr><td>If Managed, Plan Manager name: </td><td>" . $_POST["PMn"] . "</td></tr>
    <tr><td>If Managed, Plan Manager organization: </td><td>" . $_POST["PMo"] . "</td></tr>
    <tr><td>If Managed, Plan Manager email: </td><td>" . $_POST["PMe"] . "</td></tr>
    <tr><td>If Managed, Plan Manager phone: </td><td>" . $_POST["PMnn"] . "</td></tr>

    <tr><td>Participant/Parent/Guardian: Name: </td><td>" . $_POST["PPGN"] . "</td></tr>
    <tr><td>Participant/Parent/Guardian:Address </td><td>" . $_POST["PPGa"] . "</td></tr>
    <tr><td>Participant/Parent/Guardian: email: </td><td>" . $_POST["PPGE"] . "</td></tr>
    <tr><td>Participant/Parent/Guardian:Number </td><td>" . $_POST["PPGH"] . $_POST["PPGM"] . "</td></tr>
    <tr><td>Participant/Parent/Guardian: date: </td><td>" . $_POST["PPGD"] . "</td></tr>
    <tr><td>Participant/Parent/Guardian: Signature Photo: </td><td>" . $_POST["PPGS"] . "</td></tr>

    <tr><td>Guardian (completed above,no further details required) </td><td>" . $_POST["G"] . "</td></tr>
    <tr><td>Coordinator of Supports (completed above,no further details required) </td><td>" . $_POST["C"] . "</td></tr>
    
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