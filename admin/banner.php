<?php
include('db_connect.php');
?>

<?php

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $image = rand(1000, 100000) . "_" . $_FILES['image']['name'];
    $file_local = $_FILES['image']['tmp_name'];
    $folder = "assets/img/";
    move_uploaded_file($file_local, $folder . $image);
    $query = mysqli_query($conn, "INSERT INTO banner_management(title,image) VALUE('$title','$image')");
    if ($query) {
        $_SESSION['status'] = "Record has been inserted successfully !";
        
        // Redirect using header() after setting the session variable
        header('location: index.php?page=list_banner');
        exit;
    } else {
        echo "Something went wrong!";
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
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary">Add More</button>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Banner Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="title" class="form-control form-control-lg" id="title" placeholder="Title" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Banner Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control form-control-lg" id="image" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                                    <div class="col-sm-2">
                                        <input type="submit" name="submit" value="Submit" class="form-control form-control-lg btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
