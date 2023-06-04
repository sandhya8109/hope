<header class="masthead">
	<div class="container-fluid h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">


		</div>
	</div>
</header>
<section id="">
	<?php include 'admin/db_connect.php' ?>

	<?php
	$qry = $conn->query("SELECT * FROM vacancy where id=" . $_GET['id'])->fetch_array();
	foreach ($qry as $k => $v) {
		$$k = $v;
	}
	?>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<p><b>Postion :</b>
								<h4>
									<?php echo $position ?>
								</h4>
								</p>
								<p><b>Availabilty :</b>
								<h4>
									<?php echo $availability ?>
								</h4>
								</p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-lg-12">
								<?php echo html_entity_decode($description) ?>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-lg-12">
								<button class="btn btn-primary btn-sm float-right" type="button"
									data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div class="container mb-2 pt-4 ">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="text-center"><b>
								<?php echo $position ?>
							</b></h4>
						<hr class="divider" style="max-width: calc(10%)">
						<p class="text-center">
							<small>
								<i><b>Needed: <larger>
											<?php echo $availability ?>
										</larger></b></i>
							</small>
							<?php if ($status == 1): ?>
								<span class="badge badge-success pt-2">Hiring</span>
							<?php else: ?>
								<span class="badge badge-danger pt-2">Closed</span>
							<?php endif; ?>
						</p>
					</div>
				</div>
				<hr class="divider" style="max-width: calc(100%)">
				<div class="row">
					<div class="col-lg-12">
						<?php echo html_entity_decode($description) ?>
					</div>
				</div>
				<hr class="divider" style="max-width: calc(100%)">
				<div class="row">
					<div class="col-lg-12">
						<?php if ($status == 1): ?>
							<button class="btn btn-block col-md-4 btn-primary btn-sm float-right" type="button"
								id="apply_now">Apply Now</button>

						<?php else: ?>
							<button class="btn btn-block col-md-4 btn-primary btn-sm float-right" type="button" disabled=""
								id="">Application Closed</button>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<script>
	$('html, body').animate({
		scrollTop: ($('section').offset().top - 72)
	}, 1000);
	$('#apply_now').click(function () {
		uni_modal('Application from', 'submit_application.php?id=<?php echo $_GET['id'] ?>', 'large')
	})
</script>