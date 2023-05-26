<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row justify-content-center">
			<!-- FORM Panel -->
			<div class="col-lg-12 col-md-12 col-sm-12">
				<form action="" id="manage-status-cat">
					<div class="card rounded-0 mb-3">
						<div class="card-header">
							Status Form
						</div>
						<div class="card-body">
								<input type="hidden" name="id">
								<div class="row align-items-end">
									<div class="col-lg-5 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="control-label">Status</label>
											<input name="status_label" id="" cols="30" rows="2" class="form-control form-control-sm" />
										</div>
									</div>
									<div class="col-lg-5 col-md-6 col-sm-12">
										<div class="form-group">
											<button class="btn btn-sm btn-primary"> Save</button>
											<button class="btn btn-sm btn-secondary" type="button" onclick="_reset()"> Cancel</button>
										</div>
									</div>
								</div>
						</div>
					</div>
				</form>
			</div>
			<!-- FORM Panel -->
		</div>
		<div class="row">
			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header py-1">
						<div class="card-title">Applicant Status List</div>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Status Category</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$types = $conn->query("SELECT * FROM recruitment_status where status = 1 order by id asc");
								while($row=$types->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									
									<td class="">
										 <p> <b><?php echo $row['status_label'] ?></b></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_scat" type="button" data-id="<?php echo $row['id'] ?>" data-status_label="<?php echo $row['status_label'] ?>"  >Edit</button>
										<button class="btn btn-sm btn-danger delete_scat" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	function _reset(){
		$('[name="id"]').val('');
		$('#manage-status-cat').get(0).reset();
	}
	
	$('#manage-status-cat').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_recruitment_status',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_scat').click(function(){
		start_load()
		var cat = $('#manage-status-cat')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='status_label']").val($(this).attr('data-status_label')).focus()
		$('html, body').scrollTop(0)
		end_load()
	})
	$('.delete_scat').click(function(){
		_conf("Are you sure to delete this recruitment status category","delete_scat",[$(this).attr('data-id')])
	})
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
	function delete_scat($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_recruitment_status',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>