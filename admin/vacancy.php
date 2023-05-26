<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-lg-12">
								<span><large><b>Vacancy List</b></large></span>
								<button class="btn btn-sm btn-block btn-primary btn-sm col-md-2 float-right" type="button" id="new_vacancy"><i class="fa fa-plus"></i> New Vacancy</button>
							</div>
						</div>
						
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<colgroup>
								<col width="10%">
								<col width="40%">
								<col width="20%">
								<col width="10%">
								<col width="20%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Vacancy Information</th>
									<th class="text-center">Availabilty</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$plan = $conn->query("SELECT * FROM vacancy order by id asc");
								while($row=$plan->fetch_assoc()):
									$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
									unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
									$desc = strtr(html_entity_decode($row['description']),$trans);
									$desc=str_replace(array("<li>","</li>"), array("",","), $desc);
									// echo htmlentities(strip_tags($desc))
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>Position : <b><?php echo $row['position'] ?></b></p>
										<p class=" truncate"><i><small><?php echo strip_tags($desc) ?></small></i></p>
									</td>
									<td class="text-center">
										<?php echo $row['availability'] ?>
									</td>
									<td class="text-center">
										<?php if($row['status'] == 1): ?>
											<span class="badge badge-success">Active</span>
										<?php else: ?>
											<span class="badge badge-danger">Closed</span>
										<?php endif; ?>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary view_vacancy" type="button" data-id="<?php echo $row['id'] ?>" >View</button>
										<button class="btn btn-sm btn-primary edit_vacancy" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_vacancy" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
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
	$("#new_vacancy").click(function(){
		uni_modal("New Vacancy","manage_vacancy.php","mid-large")
	})
	$(".edit_vacancy").click(function(){
		uni_modal("Edit Vacancy","manage_vacancy.php?id="+$(this).attr('data-id'),"mid-large")
	})
	$(".view_vacancy").click(function(){
		uni_modal("","view_vacancy.php?id="+$(this).attr('data-id'),"mid-large")
	})

	$('.delete_vacancy').click(function(){
		_conf("Are you sure to delete this Vacancy?","delete_vacancy",[$(this).attr('data-id')])
	})
	$('table').dataTable()
	function displayImg(input,_this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#cimg').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	function delete_vacancy($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_vacancy',
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