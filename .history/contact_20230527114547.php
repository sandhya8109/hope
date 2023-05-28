<?php
include('nav.php')
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Hope Ability</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
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
  <link href="css/contact.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start 
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
   Spinner End -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
      <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item text-primary" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Service Start -->
  <h1 class="section-title bg-white text-center text-primary px-3">Ready To Learn More?​</h1>
  <p class="sub">"We are eager to connect with you! Whether you have inquiries, require assistance, or wish to share
    your feedback, our team is here to help. Reach out to us via phone, email, or the contact form below. We appreciate
    your engagement and look forward to providing you with exceptional support."</p>
  <style>
    @media (max-width: 1024px) {
      .title {
        font-size: 22px;
      }
    }

    .sub {
      color: #3A5668;
      font-family: "Vollkorn", Sans-serif;
      font-size: 22px;
      font-weight: 400;
      line-height: 1.6em;
      text-align: center;
    }

    .title {
      color: #3A5668;
      font-family: "Vollkorn", Sans-serif;
      font-size: 36px;
      font-weight: 400;
      line-height: 1.6em;
      text-align: center;
    }
  </style>

  <div class="row">
    <div class="contact">
      <i class="fa fa-map-marker-alt"></i>
      <h2>Address</h2>
      <p>15/16 Charlton Ct Woolner NT 0820</p>
    </div>
    <div class="contact">
      <i class="fa fa-envelope-open"></i>
      <h2>Mail</h2>
      <p>Info@hopeability.com.au</p>
    </div>
    <div class="contact">
      <i class="fa fa-mobile-alt"></i>
      <h2>Phone</h2>
      <p>1300 424 442</p>
    </div>
    <div class="contact">
      <i class="fa fa-user"></i>
      <h2>Referrals</h2>
      <p>Participant Form</p>
    </div>
    <div class="contact">
      <i class="fa fa-clock"></i>
      <h2>We are open</h2>
      <p>Monday – Friday : 9AM – 5PM</p>
    </div>
  </div>
  <!-- Service End -->
  <!-- Contact Start -->
  <div class="container-1">
    <style>
      .container-1 {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        box-sizing: border-box;
      }

      .apply_box {
        max-width: 600px;
        margin: 0 auto;
        margin-top: 20px;
        box-shadow: 0 0 9px rgb(91, 139, 190);
        border-radius: 10px;
        padding: 20px;
        background-color: white;
      }

      .apply_box h1 {
        color: #274a84;
        text-align: center;
      }

      .form_container {
        margin-top: 30px;
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
      }

      @media screen and (min-width: 480px) {
        .form_container {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
      }

      .form_control {
        display: flex;
        flex-direction: column;
      }

      label {
        font-size: 15px;
        margin-bottom: 5px;
      }

      input,
      select,
      textarea {
        padding: 6px 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 15px;
      }

      input:focus {
        outline-color: #274a84;
      }

      button {
        padding: 10px;
        background-color: #274a84;
        font-weight: 500;
        font-size: 15px;
        cursor: pointer;
        transition-duration: 0.3s;
        color: #fff;
        display: flex;
        justify-content: center;
        margin: 0 auto;
        border: 1px solid #274a84;
      }

      button:hover {
        transform: scale(1.1);
        background-color: #fff;
        color: #57c6e4;
        border: 1px solid #57c6e4;
      }

      .textarea_control textarea {
        width: 100%;
        resize: vertical;
      }
    </style>
    <div class="apply_box">
      <h1>
        For Enquiry Form
      </h1>
      <br>
      <form>
        <div class="form_container">
          <div class="form_control">
            <label for="first_name"> First Name </label>
            <input id="first_name" name="first_name" placeholder="Enter First Name..." />
          </div>
          <div class="form_control">
            <label for="last_name"> Last Name </label>
            <input id="last_name" name="last_name" placeholder="Enter Last Name..." />
          </div>
          <div class="form_control">
            <label for="email"> Email </label>
            <input type="email" id="email" name="email" placeholder="Enter Email..." />
          </div>
          <div class="form_control">
            <label for="job_role"> Phone </label>
            <input id="phone" name="phone" placeholder="Enter Phone...." />
          </div>
          <div class="textarea_control">
            <label for="address"> Message </label>
            <textarea id="address" name="address" row="4" cols="50" placeholder="Enter Message"></textarea>
          </div>

          <div class="button_container">
            <button type="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br>
  <br>
  </div>

  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d973.7902539402759!2d131.01108536954771!3d-12.505484499235527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cc0a311b353d393%3A0xda11542df27d0569!2s3%20Grumman%20Cres%2C%20Zuccoli%20NT%200832%2C%20Australia!5e0!3m2!1sen!2snp!4v1684496714930!5m2!1sen!2snp"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>


  </div>
  <!-- Contact End -->

  <?php
  include('footer1.php')
    ?>


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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

</html>