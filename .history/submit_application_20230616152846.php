<?php include 'admin/db_connect.php' ?>

<?php
$qry = $conn->query("SELECT * FROM vacancy where id=" . $_GET['id'])->fetch_array();
foreach ($qry as $k => $v) {
	$$k = $v;
}
?>
<?php

use phpmailer\PHPMailer;
use phpmailer\SMTP;
use phpmailer\Exception;

require_once "phpmailer/src/PHPMailer.php";
require_once "phpmailer/src/SMTP.php";
require_once "phpmailer/src/Exception.php";

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
$mail->Subject = "Work with us form";

$message = "
<table>
<tr><td>Position Id: </td><td>" . $_POST["position_id"] . "</td></tr>
	<tr><td>Last Name: </td><td>" . $_POST["lastname"] . "</td></tr>
	<tr><td>Last Name: </td><td>" . $_POST["lastname"] . "</td></tr>
    <tr><td>First Name: </td><td>" . $_POST["firstname"] . "</td></tr>
	<tr><td>Mobile No.: </td><td>" . $_POST["contact"] . "</td></tr>
    <tr><td>Gender: </td><td>" . $_POST["gender"] . "</td></tr>
	<tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>
	<tr><td>Address: </td><td>" . $_POST["address"] . "</td></tr>
    <tr><td>Cover Letter: </td><td>" . $_POST["cover_letter"] . "</td></tr>
  
</table>
";

$mail->Body = $message;
// Attach the file
$filename = $_FILES['resume']['name'];
$tmpFilePath = $_FILES['resume']['tmp_name'];
$mail->addAttachment($tmpFilePath, $resume);
try {
	$mail->send();

	echo "<script>alert('Message sent successfully.');</script>";
	echo "<script>window.location.href = 'workwithus.php';</script>";

} catch (Exception $e) {
	echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
<div class="container-fluid">

	<form method="post" name="submit_application" onsubmit="return checkpass();" id="manage-application">
		<input type="hidden" name="id" value="">
		<input type="hidden" name="position_id" value="<?php echo $_GET['id'] ?>">
		<div class="col-md-12">
			<div class="row">
				<h3>Application Form for
					<?php echo $position ?>
				</h3>
			</div>
			<hr>
			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Last Name</label>
					<input type="text" id="lastname" class="form-control" name="lastname" required="">
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">First Name</label>
					<input type="text" class="form-control" id="firstname" name="firstname" required="">
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Middle Name</label>
					<input type="text" class="form-control" id="middlename" name="middlename" required="">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Gender</label>
					<select name="gender" id="gender" class="custom-select browser-default">
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Email</label>
					<input type="email" id="email" class="form-control" name="email" required="">
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Contact</label>
					<input type="text" id="contact" class="form-control" name="contact" required="">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-7">
					<label for="" class="control-label">Address</label>
					<textarea name="address" id="address" cols="30" rows="3" required class="form-control"></textarea>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-7">
					<label for="" class="control-label">Cover Letter</label>
					<textarea name="cover_letter" id="cover_letter" cols="30" rows="3" placeholder="(Optional)"
						class="form-control"></textarea>
				</div>
			</div>
			<div class="row form-group">
				<div class="input-group col-md-4 mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="">Document</span>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="resume" onchange="displayfname(this,$(this))"
							name="resume" accept="application/msword,text/plain, application/pdf">
						<label class="custom-file-label" for="resume">Choose file</label>
					</div>

				</div>
			</div>
		</div>
	</form>
</div>

<script>
	function displayfname(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				console.log(input.files[0].name)
				_this.siblings('label').html(input.files[0].name);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	$(document).ready(function () {
		$('#manage-application').submit(function (e) {
			e.preventDefault()
			start_load()
			$.ajax({
				url: 'admin/ajax.php?action=save_application',
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				error: err => {
					console.log(err)
				},
				success: function (resp) {
					if (resp == 1) {
						alert_toast('Application successfully submitted.', 'success')
						setTimeout(function () {
							location.reload()
						}, 1000)
					}
				}
			})

		})
	})
</script>