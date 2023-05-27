<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('admin/db_connect.php');
ob_start();
$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
foreach ($query as $key => $value) {
  if (!is_numeric($key))
    $_SESSION['setting_' . $key] = $value;
}
ob_end_flush();
include('header.php');


?>

<style>
  header.masthead {
    background: url(admin/assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body id="page-top">


  <head>
    <meta charset="utf-8">
    <title>Disability & Home Care Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex">
      <div class="container py-3">
        <div class="d-flex align-items-center">

          <div class="ms-auto d-flex align-items-center">
            <small class="ms-4"><i class="fa fa-phone me-3"></i>1300 424 442</small>
            <small class="ms-4"><i class="fa fa-download me-3"></i>Important Documents</small>
            <small class="ms-4"><i class="fa fa-user-plus me-3"></i>Referrals</small>
            <div class="ms-3 d-flex">
              <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href=""><i
                  class="fab fa-instagram-square"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
          <a href="https://www.hopeability.com.au/">
            <img src="./img/image001.gif" alt="" style="margin: 10px 50px 0 0; width:120px;"" alt=""
              style=" margin: 10px 50px 0 0;">
          </a>
          <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
              <a href="./index.php" class="nav-item nav-link">Home</a>
              <a href="./services.php" class="nav-item nav-link">Our Services</a>
              <a href="./about.php" class="nav-item nav-link">About</a>
              <a href="./resigter.php" class="nav-item nav-link">Registered NDIS Provider</a>
              <a href="./contact.php" class="nav-item nav-link">Contact</a>
              <a href="./with us.php" class="nav-item nav-link">Work With Us</a>
              <a href="./blog.php" class="nav-item nav-link">Blog</a>
            </div>
            <div class="ms-auto d-none d-lg-block">
              <a href="" class="btn btn-primary rounded-pill py-2 px-3">Search &nbsp;&nbsp;&nbsp;<i
                  class="fa fa-search"></i></a>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar End -->



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>


  <?php
  $page = isset($_GET['page']) ? $_GET['page'] : "home";
  include $page . '.php';
  ?>


  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5>
        </div>
        <div class="modal-body">
          <div id="delete_content"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id='submit'
            onclick="$('#uni_modal form').submit()">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="fa fa-arrow-righ t"></span>
          </button>
        </div>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div>
  <div id="preloader"></div>


  <?php include('footer.php') ?>
</body>

<?php $conn->close() ?>

</html>