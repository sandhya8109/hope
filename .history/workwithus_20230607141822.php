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
    background-image: url("./background/work with us -banner.jpeg");
    height: 393px;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body id="page-top">

  <!-- Topbar Start -->
  <div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
      <div class="d-flex align-items-center">
        <div class="ms-auto d-flex align-items-center">
          <a href=""><small class="ms-4" style="color:#fff;"><i class="fa fa-phone me-3"></i>1300 424
              442</small></a>
          <a href="./imp.php" style="color:#fff;"><small class="ms-4"><i class="fa fa-download me-3"></i>Important
              Documents</small></a>
          <a href="./workwithus.php" style="color:#fff;"><small class="ms-4"><i class="fa fa-user-plus me-3"></i>Work
              with us</small>
            <div class="ms-3 d-flex">
          </a>
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
          <img src="./img/image001.gif" alt="" style="margin: 10px 50px 0 0; width:120px;">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav">
            <a href="./index.php" class="nav-item nav-link">Home</a>
            <a href="./service.php" class="nav-item nav-link">Our Services</a>
            <a href="./aboutus.php" class="nav-item nav-link">About</a>
            <a href="./mental.php" class="nav-item nav-link">Mental Health</a>
            <a href="./contact.php" class="nav-item nav-link">Contact</a>
            <a href="./refer.php" class="nav-item nav-link">Referral</a>
            <a href="./testimonial.php" class="nav-item nav-link">Testimonials</a>
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

  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <style>
        .bg-dark {
          background-color: #3A5668 !important;
          margin: 5px 0px;
        }

        .bg-dark p {
          color: #fff;
          margin-top: 10px;
        }

        .py-5 {
          padding-top: 1rem !important;
          padding-bottom: 2rem !important;
        }

        .footer .btn.btn-link {
          color: #fff;
        }

        .mb-2 {
          margin-left: 0px;
        }
      </style>
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <img src="img/hopeability.png">
          <p style="margin-left:0px;">Hope Ability acknowledges the traditional owners and custodians of country
            throughout Australia
            and acknowledges their continuing connection to land, sea and community.</p>

        </div>
        <div class=" col-lg-3 col-md-6">
          <h4 class="text-white mb-4">Our Office</h4>
          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>15/16 Charlton Ct Woolner NT 0820</p>
          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>1300 424 442</p>
          <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@hopeability.com.au</p>
          <div class="d-flex pt-3">
            <a class="btn btn-square btn-light rounded-circle me-2" href="https://twitter.com/Hopeabilityau"><i
                class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-4">Quick Links</h4>
          <a class="btn btn-link" href="./aboutus.php">About Us</a>
          <a class="btn btn-link" href="./contact.php">Contact Us</a>
          <a class="btn btn-link" href="./service.php">Our Services</a>
          <a class="btn btn-link" href="./term.php">Terms & Condition</a>
          <a class="btn btn-link" href="./privacy.php">privacy</a>
          <a class="btn btn-link" href="./imp.php">Imp Document</a>
          <a class="btn btn-link" href=".//workwithus.php">Work with us</a>

        </div>
        <div class="col-lg-3 col-md-6">
          <img class="w-100" src="background/NDISnew.png" alt="Image">

        </div>

      </div>
    </div>
  </div>
  <!-- Footer End -->
  <?php include('footer.php') ?>
</body>

<?php $conn->close() ?>

</html>