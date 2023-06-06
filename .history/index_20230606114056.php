<?php
include('admin/db_connect.php');
?>
<?php
include('nav.php');
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
    <!-- Spinner Start 
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    Spinner End -->

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php
                $i = 0;


                $result = mysqli_query($conn, "SELECT * FROM banner_management WHERE image !='' AND is_active = '1'");
                while ($banner = mysqli_fetch_array($result)) {
                    $image1 = "admin/assets/img/" . $banner['image'];
                    ?>

                    <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
                        <img class="w-100" src="<?php echo $image1; ?>"
                            style="height: 680px; background:rgb(180, 180, 180);" alt="Image">
                        <div class="carousel-caption" style="background: rgb(180, 180, 180);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7 text-start">
                                        <p class="fs-4 text-white animated slideInRight">Welcome to
                                            <strong>Hope Ability</strong>
                                        </p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">
                                            <?php echo $banner['title']; ?>
                                        </h1>
                                        <a href="./mental.php"
                                            class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">CLICK HERE
                                            TO GET STARTED</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $i++;
                }
                ?>

            </div>
        </div>
    </div>

    <!-- Include necessary JavaScript libraries and initialize the carousel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#header-carousel').carousel();
        });
    </script>

    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="section-title bg-white text-center display-5 mb-5 text-primary px-3">About Us</h1>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/aboutus.jpg" alt=""
                            style="object-fit: cover; border-radius: 15px 45px 15px 45px; ">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-4">We're All About Trust</h1>
                    <p class="mb-4">Hope Ability management has years of experience in disability services along with
                        extensive experience in customer focused public and private sector. Our vision is to empower
                        participants to take ownership of their life.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="./about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Project Start-->
    <h1 class="section-title bg-white text-center display-5 mb-5 text-primary px-3">Our Services</h1>
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">

            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="background/development of life skills.jpeg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="background/development of life skills.jpeg" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./service.php"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Development-Life Skills</a>
                        <span>Development of daily living and life skills focus on training and develop......</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" style="height:270px" src="background/personal activities.jpeg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="background/personal activities.jpeg" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./service.php"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Personal Activities</a>
                        <span>Assisting with and/or supervising personal tasks of daily life to enable......</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="background/assistance in life task.jpeg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="background/assistance in life task.jpeg" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./service.php"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Assistance Life Tasks</a>
                        <span>This registration group incorporates assistance with or supervising tasks........</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid"
                            src="background/participation in community,social and civic activities.jpeg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="background/participation in community,social and civic activities.jpeg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./service.php"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Participation In Community, Social And Civic Activities</a>
                        <span>Being part of something beyond your front door is so important to living........</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="background/assistance with travel.jpeg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="background/assistance with travel.jpeg" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./service.php"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Assistance With Travel/Transport Arrangements</a>
                        <span>We are passionate about helping you to be as independent as possible by
                            providing........</span>
                    </div>

                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="background/Household task.jpeg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1"
                                href="background/Household task.jpeg" data-lightbox="project"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="./service.php"><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Household Task</a>
                        <span>Having a clean and neat home environment is important for wellbeing........</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Project End -->
    <!-- Mission Start -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="section-title bg-white text-center display-5 mb-5 text-primary px-3">Our Mission</h1>
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-5 text-center">Our mission is to empower people with a disability to engage in
                    opportunities of their choice in a supported and inclusive environment.</p>

            </div>

        </div>
    </div>
    </div>
    <!-- Mission End -->

    <!--Values Start-->
    <h1 class="section-title bg-white text-center display-5 mb-5 text-primary px-3">Our Values</h1>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa-solid fa fa-3x fa-user-check text-primary mb-4" style="color:#274a84;"></i>
                            <h5 class="mb-3">Honesty</h5>
                            <p>We provide high quality care with transparency and integrity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa-solid fa fa-3x fa-handshake-angle text-primary mb-4"
                                style="color:#274a84;"></i>
                            <h5 class="mb-3">Respects</h5>
                            <p>We provide a safe environment for participants by giving them respect.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">

                            <i class="fa-solid fa fa-3x fa-asterisk text-primary mb-4" style="color: #274a84;"></i>
                            <h5 class="mb-3">Inclusiveness</h5>
                            <p>We provide a happy, fun and open environment for all.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa-solid  fa fa-3x fa-star text-primary mb-4" style="color: #274a84;"></i>
                            <h5 class="mb-3">Quality</h5>
                            <p>We strive for excellence through high quality systems and procedures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Values End-->


    <!-- Registered NDIS-->
    <div style="background-color: #88bc6f;">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.3s">

                    <h1 class="mb-5" style="color: #fff;">We Are Registered NDIS Provider</h1>
                    <a class="btn btn-primary py-3 px-5 "
                        style="border-radius: 10px; background-color: #24343899; border: #24343899; margin-bottom: 30px;"
                        href="./refer.php">Refer a Participant</a>
                </div>
            </div>
        </div>
    </div>
    <!--Registered /NDIS END-->

    <!--contact-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.3s">

                <h1 class="section-title bg-white text-center display-5 mb-5 text-primary px-3">Looking For Advice?</h1>
                <p class="mb-5">Call us on 1300 424 442 to talk about your needs. Or fill out the form below and our
                    Care Advisors will be in touch soon.</p>
            </div>
            <div class="row g-4">

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3896.285332767919!2d130.8573214148163!3d-12.430699591212349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2cc093e0f0095555%3A0xba956485c51af35!2s15%2F16%20Charlton%20Ct%2C%20Woolner%20NT%200820%2C%20Australia!5e0!3m2!1sen!2snp!4v1685378953191!5m2!1sen!2snp"
                        frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="send.php" method="POST">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="name" class="form-control" id="name" name="name"
                                        placeholder="Your name" required />
                                    <label for="name">Your name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" required />
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="subject" class="form-control" id="subject" name="subject"
                                        placeholder="Subject" required />
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" textarea id="m" required
                                        placeholder="Leave a message here" id="m" name="m"
                                        style="height: 150px"></textarea>
                                    <label for="m">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End-->

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

                . py-5 {
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