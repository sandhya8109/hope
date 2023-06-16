<?php include 'db_connect.php' ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";
var_dump("Hello");
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
<tr><td>Position ID: </td><td>" . $_POST["position_id"] . "</td></tr>
	<tr><td>Last Name: </td><td>" . $_POST["lastname"] . "</td></tr>
    <tr><td>First Name: </td><td>" . $_POST["firstname"] . "</td></tr>
	<tr><td>Mobile No.: </td><td>" . $_POST["contact"] . "</td></tr>
    <tr><td>Gender: </td><td>" . $_POST["gender"] . "</td></tr>
	<tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>
	<tr><td>Address: </td><td>" . $_POST["address"] . "</td></tr>
    <tr><td>Cover Letter: </td><td>" . $_POST["cover_letter"] . "</td></tr>
    <tr><td>Document: </td><td>" . $_POST["resume"] . "</td></tr>
</table>
";

$mail->Body = $message;

try {
	$mail->send();

	echo "<script>alert('Message sent successfully.');</script>";
	echo "<script>window.location.href = 'workwithus.php';</script>";

} catch (Exception $e) {
	echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
<?php
if (isset($_GET['id'])) {
	$application = $conn->query("SELECT  a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id where a.id=" . $_GET['id'])->fetch_array();
	foreach ($application as $k => $v) {
		$$k = $v;
	}
	$fname = explode('_', $resume_path);
	unset($fname[0]);
	$fname = implode("", $fname);
}
$qry = $conn->query("SELECT * FROM vacancy ");
while ($row = $qry->fetch_assoc()) {
	$pos[$row['id']] = $row['position'];
}
$rs = $conn->query("SELECT * FROM recruitment_status ");
while ($row = $rs->fetch_assoc()) {
	$stat[$row['id']] = $row['status_label'];
}


?>
<div class="container-fluid">
	<form id="manage-application">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="col-md-12">
			<div class="row form-group">
				<div class="col-md-6">
					<label for="" class="control-label">Position</label>
					<select class="custom-select browser-default select2" name="position_id">
						<option value=""></option>
						<?php foreach ($pos as $k => $v): ?>
							<option value="<?php echo $k ?>" <?php echo isset($position_id) && $position_id == $k ? "selected" : '' ?>><?php echo $v ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Last Name</label>
					<input type="text" class="form-control" id="lastname" name="lastname" required=""
						value="<?php echo isset($lastname) ? $lastname : '' ?>">
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">First Name</label>
					<input type="text" class="form-control" id="firstname" name="firstname" required=""
						value="<?php echo isset($firstname) ? $firstname : '' ?>">
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Middle Name</label>
					<input type="text" class="form-control" id="middlename" name="middlename" required=""
						value="<?php echo isset($middlename) ? $middlename : '' ?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-4">
					<label for="" class="control-label">Gender</label>
					<select name="gender" id="gender" class="custom-select browser-default">
						<option value="male" <?php echo isset($gender) && $gender == 'Male' ? "selected" : '' ?>>Male
						</option>
						<option value="female" <?php echo isset($gender) && $gender == 'Female' ? "selected" : '' ?>>
							Female</option>
					</select>
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Email</label>
					<input type="email" id="email" class="form-control" name="email" required=""
						value="<?php echo isset($email) ? $email : '' ?>">
				</div>
				<div class="col-md-4">
					<label for="" class="control-label">Contact</label>
					<input type="text" class="form-control" id="contact" name="contact" required=""
						value="<?php echo isset($contact) ? $contact : '' ?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-10">
					<label for="" class="control-label">Address</label>
					<textarea name="address" id="address" cols="30" rows="3" required
						class="form-control"><?php echo isset($address) ? $address : '' ?></textarea>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-10">
					<label for="" class="control-label">Cover Letter</label>
					<textarea name="cover_letter" id="cover_letter" cols="30" rows="3" placeholder="(Optional)"
						class="form-control"><?php echo isset($cover_letter) ? $cover_letter : '' ?></textarea>
				</div>
			</div>
			<div class="row form-group">
				<div class="input-group col-md-10 mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="">Document</span>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="resume" onchange="displayfname(this,$(this))"
							name="resume" accept="application/msword,text/plain, application/pdf">
						<label class="custom-file-label" for="resume">
							<?php echo isset($fname) ? $fname : 'Choose file' ?>
						</label>
					</div>

				</div>
			</div>
			<?php if (isset($id)): ?>
				<div class="row form-group">
					<div class="col-md-6">
						<label for="" class="control-label">Status</label>
						<select class="custom-select browser-default select2" name="status">
							<option value="0" <?php echo isset($process_id) && $process_id == 0 ? "selected" : '' ?>>New
							</option>
							<?php foreach ($stat as $k => $v): ?>
								<option value="<?php echo $k ?>" <?php echo isset($process_id) && $process_id == $k ? "selected" : '' ?>><?php echo $v ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			<?php endif; ?>
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
		$('.select2').select2({
			width: "100%",
			placeholder: 'Please select here'
		})
		$('#manage-application').submit(function (e) {
			e.preventDefault()
			start_load()
			$.ajax({
				url: 'ajax.php?action=save_application',
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