<?php include 'db_connect.php' ?>

<?php
$qry = $conn->query("SELECT * FROM vacancy where id=" . $_GET['id'])->fetch_array();
foreach ($qry as $k => $v) {
	$$k = $v;
}
?>
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
			<button class="btn btn-primary btn-sm float-right" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>

<style type="">
	#uni_modal .modal-footer{
		display: none
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>