<script>
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd"
    })
    window.start_load = function () {
        $('body').prepend('<di id="preloader2"></di>')
    }
    window.end_load = function () {
        $('#preloader2').fadeOut('fast', function () {
            $(this).remove();
        })
    }

    window.uni_modal = function ($title = '', $url = '', $size = '') {
        start_load()
        $.ajax({
            url: $url,
            error: err => {
                console.log()
                alert("An error occured")
            },
            success: function (resp) {
                if (resp) {
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if ($size != '') {
                        $('#uni_modal .modal-dialog').addClass($size)
                    } else {
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
                    }
                    $('#uni_modal').modal({
                        show: true,
                        backdrop: 'static',
                        keyboard: false,
                        focus: true
                    })
                    end_load()
                }
            }
        })
    }
    window.uni_modal_right = function ($title = '', $url = '') {
        start_load()
        $.ajax({
            url: $url,
            error: err => {
                console.log()
                alert("An error occured")
            },
            success: function (resp) {
                if (resp) {
                    $('#uni_modal_right .modal-title').html($title)
                    $('#uni_modal_right .modal-body').html(resp)

                    $('#uni_modal_right').modal('show')
                    end_load()
                }
            }
        })
    }
    window.alert_toast = function ($msg = 'TEST', $bg = 'success') {
        $('#alert_toast').removeClass('bg-success')
        $('#alert_toast').removeClass('bg-danger')
        $('#alert_toast').removeClass('bg-info')
        $('#alert_toast').removeClass('bg-warning')

        if ($bg == 'success')
            $('#alert_toast').addClass('bg-success')
        if ($bg == 'danger')
            $('#alert_toast').addClass('bg-danger')
        if ($bg == 'info')
            $('#alert_toast').addClass('bg-info')
        if ($bg == 'warning')
            $('#alert_toast').addClass('bg-warning')
        $('#alert_toast .toast-body').html($msg)
        $('#alert_toast').toast({ delay: 3000 }).toast('show');
    }
    window.load_cart = function () {
        $.ajax({
            url: 'admin/ajax.php?action=get_cart_count',
            success: function (resp) {
                if (resp > -1) {
                    resp = resp > 0 ? resp : 0;
                    $('.item_count').html(resp)
                }
            }
        })
    }
    $('#login_now').click(function () {
        uni_modal("LOGIN", 'login.php')
    })
    $(document).ready(function () {
        load_cart()
        $('#preloader').fadeOut('fast', function () {
            $(this).remove();
        })
    })
</script>
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
                    <a class="btn btn-square btn-light rounded-circle me-2" href="https://twitter.com/Hopeabilityau"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
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
                <img class="w-100" src="background/NDISnew.png" alt="Image">

            </div>

        </div>
    </div>
</div>
<!-- Footer End -->

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
<script src="admin/assets/vendor/jquery/jquery.min.js"></script>
<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="admin/assets/js/select2.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>