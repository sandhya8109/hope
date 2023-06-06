<?php
include('admin/db_connect.php');
?>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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



    <!-- Page Header Start -->
    <div class="container-fluid pagetesti-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="section-title bg-white text-center text-primary px-3">Testimonials</h1>
                <p class="mb-5">"Our participants along with their guardian love our services! Here's what they have to
                    say about their experience with us: We are proud to have made a difference in the lives of our
                    participants and remain committed to delivering exceptional support and care."</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php


                if ($conn) {
                    $result = mysqli_query($conn, "SELECT * FROM testimonial_management WHERE image !='' AND is_active = '1'");
                    $i = 0; // Initialize the counter variable
                    while ($testimonial = mysqli_fetch_array($result)) {
                        $image = "admin/assets/img/." . $testimonial['image'];
                        $i++; // Increment the counter variable
                        ?>
                        <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                            <img class="mb-4" src="<?php echo $image; ?>" alt="">
                            <p class="mb-4">
                                <?php echo $testimonial['descb']; ?>
                            </p>
                            <h5>
                                <?php echo $testimonial['name']; ?>
                            </h5>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>


    <!-- Testimonial End -->


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
            </style>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <img src="img/hopeability.png">
                    <p>Hope Ability acknowledges the traditional owners and custodians of country throughout Australia
                        and acknowledges their continuing connection to land, sea and community.</p>

                </div>
                <div class=" col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>15/16 Charlton Ct Woolner NT 0820</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>1300 424 442</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@hopeability.com.au</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2"
                            href="https://twitter.com/Hopeabilityau"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="./aboutus.php">About Us</a>
                    <a class="btn btn-link" href="./contact.php">Contact Us</a>
                    <a class="btn btn-link" href="./service.php">Our Services</a>
                    <a class="btn btn-link" href="./term.php">Terms & Condition</a>
                    <a class="btn btn-link" href="./privacy.php">privacy</a>
                    <a class="btn btn-link" href=".//workwithus.php">Work with us</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <img class="w-100" src="img/ndis-logo-purple.jpg" alt="Image"
                        style="background:#fff; border: 1px solid purple;">
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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