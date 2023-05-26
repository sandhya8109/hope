<?php include 'admin/db_connect.php' ?>

<?php
	$qry = $conn->query("SELECT * FROM vacancy where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
?>
<div class="container-fluid">
	<form id="manage-application">
		<input type="hidden" name="id" value="">
		<input type="hidden" name="position_id" value="<?php echo $_GET['id'] ?>">
	<div class="col-md-12">
		<div class="row">
			<h3>Application Form for <?php echo $position ?></h3>
		</div>
		<hr>
		<div class="row form-group">
			<div class="col-md-4">
				<label for="" class="control-label">Last Name</label>
				<input type="text" class="form-control" name="lastname" required="">
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">First Name</label>
				<input type="text" class="form-control" name="firstname" required="">
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">Middle Name</label>
				<input type="text" class="form-control" name="middlename" required="">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4">
				<label for="" class="control-label">Gender</label>
				<select name="gender" id="" class="custom-select browser-default">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">Email</label>
				<input type="email" class="form-control" name="email" required="">
			</div>
			<div class="col-md-4">
				<label for="" class="control-label">Contact</label>
				<input type="text" class="form-control" name="contact" required="">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-7">
				<label for="" class="control-label">Address</label>
				<textarea name="address" id="" cols="30" rows="3" required class="form-control"></textarea>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-7">
				<label for="" class="control-label">Cover Letter</label>
				<textarea name="cover_letter" id="" cols="30" rows="3" placeholder="(Optional)" class="form-control"></textarea>
			</div>
		</div>
		<div class="row form-group">
			<div class="input-group col-md-4 mb-3">
				<div class="input-group-prepend">
			    <span class="input-group-text" id="">Resume</span>
			  </div>
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="resume" onchange="displayfname(this,$(this))" name="resume" accept="application/msword,text/plain, application/pdf">
			    <label class="custom-file-label" for="resume">Choose file</label>
			  </div>
			  
			</div>
		</div>
	</div>
	</form>
</div>

<script>
	function displayfname(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	console.log(input.files[0].name)
        	_this.siblings('label').html(input.files[0].name);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function(){
	$('#manage-application').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'admin/ajax.php?action=save_application',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				if(resp == 1){
					alert_toast('Application successfully submitted.','success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})

	})
})
</script>