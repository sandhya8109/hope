<?php include('db_connect.php');?>
<?php
$qry = $conn->query("SELECT * FROM vacancy ");
	while($row=$qry->fetch_assoc()){
		$pos[$row['id']] = $row['position'];
	}
	$pid = 'all';
	if(isset($_GET['pid']) && $_GET['pid'] >= 0){
		$pid = $_GET['pid'];
	}
	$position_id = 'all';
	if(isset($_GET['position_id']) && $_GET['position_id'] >= 0){
		$position_id = $_GET['position_id'];
	}
?>
<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">

			<!-- Table Panel -->
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><large><b>Application List</b></large></span>
								<button class="btn btn-sm btn-block btn-primary btn-sm col-md-2 float-right" type="button" id="new_application"><i class="fa fa-plus"></i> New Applicant</button>
							</div>
						</div>
						
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-md-2 offset-md-2 text-right">Position :</div>
									<div class="col-md-5">
										<select name="" class="custom-select browser-default select2" id="position_filter">
											<option value="all"  <?php echo isset($position_id) && $position_id == "all" ? "selected" : '' ?>>All</option>
											<?php foreach($pos as $k => $v): ?>
												<option value="<?php echo $k ?>" <?php echo isset($position_id) && $position_id == $k ? "selected" : '' ?>><?php echo $v ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<hr><br>
						<table class="table table-bordered table-hover">
							<colgroup>
								<col width="10%">
								<col width="30%">
								<col width="20%">
								<col width="30%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Applicant Information</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$stats = $conn->query("SELECT * FROM recruitment_status order by id asc");
								$stat_arr[0] = "New";
								while ($row = $stats->fetch_assoc()) {
									$stat_arr[$row['id']] = $row['status_label'];
								}
								$awhere = '';
								if(isset($_GET['pid']) && $_GET['pid'] >= 0){
									$awhere = " where a.process_id = '".$_GET['pid']."' ";
								}
								if(isset($_GET['position_id']) && $_GET['position_id'] > 0){
									if(empty($awhere))
									$awhere = " where a.position_id = '".$_GET['position_id']."' ";
									else
									$awhere .= " and a.position_id = '".$_GET['position_id']."' ";

								}
								$application = $conn->query("SELECT a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id $awhere order by a.id asc");
								while($row=$application->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>Name : <b><?php echo ucwords($row['lastname'].', '.$row['firstname'].' '.$row['middlename']) ?></b></p>
										<p>Applied for : <b><?php echo $row['position'] ?></b></p>
									</td>
									<td class="text-center">
										<?php echo $stat_arr[$row['process_id']] ?>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary view_application" type="button" data-id="<?php echo $row['id'] ?>" >View</button>
										<button class="btn btn-sm btn-primary edit_application" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_application" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 form-group">
								<button class="btn-block btn-sm btn filter_status" type="button" data-id="all">All</button>
							</div>
						</div>
						<?php foreach ($stat_arr as $key => $value): ?>
						<div class="row">
							<div class="col-md-12 form-group">
								<button class="btn-block btn-sm btn filter_status" type="button" data-id="<?php echo $key ?>" ><?php echo $value ?></button>
							</div>
						</div>
						<?php endforeach; ?>
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
	$('.filter_status').each(function(){
		if($(this).attr('data-id') == '<?php echo $pid ?>')
			$(this).addClass('btn-primary')
		else
			$(this).addClass('btn-info')

	})
	$('table').dataTable()
	$("#new_application").click(function(){
		uni_modal("New Application","manage_application.php","mid-large")
	})
	$(".edit_application").click(function(){
		uni_modal("Edit Application","manage_application.php?id="+$(this).attr('data-id'),"mid-large")
	})
	$(".view_application").click(function(){
		uni_modal("","view_application.php?id="+$(this).attr('data-id'),"mid-large")
	})

	$('.delete_application').click(function(){
		_conf("Are you sure to delete this Applicant?","delete_application",[$(this).attr('data-id')])
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
$('.filter_status').click(function(){
	location.href = "index.php?page=applications&pid="+$(this).attr('data-id')+'&position_id=<?php echo $position_id ?>'
})
$('#position_filter').change(function(){
	location.href = "index.php?page=applications&position_id="+$(this).val()+'&pid=<?php echo $pid ?>'
})
	function delete_application($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_application',
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