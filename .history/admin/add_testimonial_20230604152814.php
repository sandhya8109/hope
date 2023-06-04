<?php
include('db_connect.php');

?>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $descb = $_POST['descb'];
  $image = rand(1000, 100000) . "_" . $_FILES['image']['name'];
  $file_local = $_FILES['image']['tmp_name'];
  $folder = "assets/img/.";
  move_uploaded_file($file_local, $folder . $image);
  $query = mysqli_query($conn, "INSERT INTO testimonial_management(name,descb,image)VALUE('$name','$descb','$image')");
  if ($query) {
    $_SESSION['status'] = "Record has been inserted successfully !";



  } else {
    echo "something went wrong !";
  }

}
?>

<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->




        <div class="card">

          <div class="card-body">





            <form method="post" action="#" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Client Name</label>

                <div class="col-sm-8">
                  <input type="text" name="name" class="form-control form-control-lg" id="title" placeholder="Name"
                    required="">
                </div>

              </div>

              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
                <div class="col-sm-8">
                  <textarea type="text" name="descb" class="form-control form-control-lg" id="descb"
                    placeholder="Description" required="">
    </textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
                <div class="col-sm-8">
                  <input type="file" name="image" class="form-control form-control-lg" id="image" required="">
                </div>
              </div>

              <div class="form-group row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                <div class="col-sm-2">
                  <input type="submit" name="submit" value="submit"
                    class="form-control form-control-lg btn btn-primary">
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
      <!-- End of Main Content -->