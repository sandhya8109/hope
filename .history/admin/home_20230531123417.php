<?php include 'db_connect.php' ?>
<style>
   
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
				<?php echo "Welcome back ". $_SESSION['login_name']."!"  ?>
									
				</div>
				<hr>
				<div class="row ml-2 mr-2">
				<div class="col-md-6">
                        <div class="card bg-light shadow  mb-3 rounded-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="">New Applicants</div>
                                        <div class="text-lg font-weight-bold">
                                        	<?php 
                                        	$applicant = $conn->query("SELECT * FROM application where process_id = 0 ");
                                        	echo $applicant->num_rows;
                                        	 ?>
                                        		
                                    	</div>
                                    </div>
                                    <i class="fa fa-user-tie"></i>
                                </div>
                            </div>
                            
                    </div>
		      </div>
              <div class="col-md-6">
                  <div class="card bg-light shadow  mb-3 rounded-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="">Active Vacanies</div>
                                        <div class="text-lg font-weight-bold">
                                            <?php 
                                            $vacancies = $conn->query("SELECT * FROM vacancy where status = 1  ");
                                            echo $vacancies->num_rows;
                                             ?>
                                                
                                        </div>
                                    </div>
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                            
                    </div>
              </div>
		</div>
    </div>
	</div>

</div>
<script>
	
</script>