<?php
include('admin/db_connect.php');
?>
<?php
include('nav.php')
    ?>



<!-- Page Header Start -->
<div class="container-fluid pagetesti-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" height: 293px;
    width: 100%;">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            
                <li class="breadcrumb-item text-primary" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<style>
      .sub {
    color: #3A5668;
    font-family: "Montserrat", Sans-serif;
    font-size: 17px;
    font-weight: 200;
    line-height: 1.6em;
    text-align: center;
    margin: 40px;
  }
</style>
<h1 class="section-title bg-white text-center text-primary px-3">Testimonials​</h1>
<p class="sub">"Our participants along with their guardian love our services! Here's what they have to
                say about their experience with us: We are proud to have made a difference in the lives of our
                participants and remain committed to delivering exceptional support and care."</p>
<!-- Testimonial Start -->
<div class="container-xxl pt-5">
    <div class="container">
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

<?php include('footer1.php') ?>