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
										</larger></b>
								</i>
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
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
						Launch demo modal
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Application Form</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<form id="manage-application">
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
														<input type="text" class="form-control" name="lastname"
															required="">
													</div>
													<div class="col-md-4">
														<label for="" class="control-label">First Name</label>
														<input type="text" class="form-control" name="firstname"
															required="">
													</div>
													<div class="col-md-4">
														<label for="" class="control-label">Middle Name</label>
														<input type="text" class="form-control" name="middlename"
															required="">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-4">
														<label for="" class="control-label">Gender</label>
														<select name="gender" id=""
															class="custom-select browser-default">
															<option>Male</option>
															<option>Female</option>
														</select>
													</div>
													<div class="col-md-4">
														<label for="" class="control-label">Email</label>
														<input type="email" class="form-control" name="email"
															required="">
													</div>
													<div class="col-md-4">
														<label for="" class="control-label">Contact</label>
														<input type="text" class="form-control" name="contact"
															required="">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-7">
														<label for="" class="control-label">Address</label>
														<textarea name="address" id="" cols="30" rows="3" required
															class="form-control"></textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-7">
														<label for="" class="control-label">Cover Letter</label>
														<textarea name="cover_letter" id="" cols="30" rows="3"
															placeholder="(Optional)" class="form-control"></textarea>
													</div>
												</div>
												<div class="row form-group">
													<div class="input-group col-md-4 mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="">Document</span>
														</div>
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="resume"
																onchange="displayfname(this,$(this))" name="resume"
																accept="application/msword,text/plain, application/pdf">
															<label class="custom-file-label" for="resume">Choose
																file</label>
														</div>

													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" id='submit'
										onclick="$('#uni_modal form').submit()">Save</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
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