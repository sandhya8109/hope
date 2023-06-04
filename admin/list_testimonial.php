<?php
include('db_connect.php');
?>

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
                            <button class="btn btn-primary">
                                <a href="index.php?page=add_testimonial" style="color:white;text-decoration: none;">Add
                                    More</a>
                            </button>

                            <?php if (isset($_SESSION['status'])) { ?>

                                <div class="col-md-4 float-right alert alert-success alert-dismissible fade show"
                                    role="alert">
                                    <strong>Hi </strong>
                                    <?php echo $_SESSION['status']; ?>

                                </div>
                            <?php }
                            unset($_SESSION['status']); ?>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="example">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Client Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $n = 1;
                                        $view = mysqli_query($conn, "SELECT * FROM testimonial_management");
                                        while ($data = mysqli_fetch_assoc($view)) {

                                            $id = $data['id'];
                                            $name = $data['name'];
                                            $descb = $data['descb'];
                                            $image = "<img style='height:40px; width:40px;' src='assets/img/." . $data['image'] . "'>";
                                            ?>

                                            <tr>
                                                <td>
                                                    <?php echo $n; ?>
                                                </td>
                                                <td>
                                                    <?php echo $name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $descb; ?>
                                                </td>
                                                <td>
                                                    <?php echo $image; ?>
                                                </td>
                                                <td><a href="delete_testimonial.php?id=<?php echo $id; ?>"
                                                        class='btn btn-square btn-danger'>Delete</a></td>


                                                <td>
                                                    <?php

                                                    if ($data['is_active'] == 1) {
                                                        echo '<p><a href="active_testimonial.php?id=' . $data['id'] . '&is_active=0" class="btn btn-success">Active</a></p>';
                                                    } else {
                                                        echo '<p><a href="active_testimonial.php?id=' . $data['id'] . '&is_active=1" class="btn btn-danger">Deactive</a></p>';
                                                    }

                                                    ?>
                                                </td>

                                            </tr>

                                            <?php $n++;
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->