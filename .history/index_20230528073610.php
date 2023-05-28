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

  <!-- Topbar Start -->
  <div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
      <div class="d-flex align-items-center">
        <div class="ms-auto d-flex align-items-center">
          <a href=""><small class="ms-4" style="color:#fff;"><i class="fa fa-phone me-3"></i>1300 424
              442</small></a>
          <a href="./imp.php" style="color:#fff;"><small class="ms-4"><i class="fa fa-download me-3"></i>Important
              Documents</small></a>
          <a href="./referral.php" style="color:#fff;"><small class="ms-4"><i
                class="fa fa-user-plus me-3"></i>Referrals</small>
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
            <a href="./with us.php" class="nav-item nav-link">Work With Us</a>
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
  <footer class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contact us</h2>
          <hr class="divider my-4" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>
            <?php echo $_SESSION['setting_contact'] ?>
          </div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
          <a class="d-block" href="mailto:<?php echo $_SESSION['setting_email'] ?>"><?php echo $_SESSION['setting_email'] ?></a>
        </div>
      </div>
    </div>
    <br>

  </footer>

  <?php include('footer.php') ?>
</body>

<?php $conn->close() ?>

</html>