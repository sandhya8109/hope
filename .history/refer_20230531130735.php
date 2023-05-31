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
    <link href="css/refer.css" rel="stylesheet">

</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Refer a Participant</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php" style="color: white;">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Referal</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!--Form-->
    <div class="container-fluid">
        <h1 class="display-5 mb-4" style="font-size:2.5rem; ">Do You Know Someone Who Needs Help To Live Their Best
            Life?​</h1>
        <p class="text-center" style="margin: 1.5rem 10rem 0 10rem;  font-size: large; ">"Know someone who could benefit
            from our services? Refer them to us and help us make a
            difference in their lives. Your referral means a lot to us as we strive to extend our reach and provide
            exceptional support and care to more individuals. Thank you for considering recommending Hope Ability.”</p>
        </br>

        <h2 class="text-center" style="color: #274a84;">Please Fill In The Following Details</h2>
        <p class="text-center" style="margin: 1.5rem 10rem 0 10rem;  font-size: large; ">All fields marked with <span
                style="color: red;">*</span> are required and must be
            filled.</p>
        <div id="multi-step-form-container">
            <!-- Form Steps / Progress Bar -->
            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                <!-- Step 1 -->
                <li class="form-stepper-active text-center form-stepper-list" step="1">
                    <a class="mx-2">
                        <span class="form-stepper-circle">
                            <span>1</span>
                        </span>
                        <div class="label">Participant Details</div>
                    </a>
                </li>
                <!-- Step 2 -->
                <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>2</span>
                        </span>
                        <div class="label text-muted">Service Details</div>
                    </a>
                </li>
                <!-- Step 3 -->
                <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>3</span>
                        </span>
                        <div class="label text-muted">Referer Details</div>
                    </a>
                </li>
            </ul>
            <!-- Step Wise Form Content -->
            <form id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
                <div class="user-details">
                    <!-- Step 1 Content -->
                    <section id="step-1" class="form-step">
                        <h2 class="font-normal">Participant Details</h2>
                        <!-- Step 1 input fields -->
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label>First Name<span style="color:red">*</span></label>
                                <input type="text" placeholder="Enter first name" data-validation="required" />
                            </div>
                            <div class="mt-3 col">
                                <label>Last Name<span style="color:red">*</span></label>
                                <input type="text" placeholder="Enter last name" data-validation="required" />
                            </div>
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label>Date of Birth<span style="color:red">*</span></label>
                                <input type="date" placeholder="MM.DD.YYYY" data-validation="required" />
                            </div>
                            <div class="mt-3 col">
                                <label>Gender<span style="color:red">*</span></label>
                                <div class="select-box">
                                    <select id="drop-down" name="gender" data-validation="required">
                                        <option value="">Select Gender</option>
                                        <option value="">Female</option>
                                        <option value="">Male</option>
                                        <option value="">Non-binary</option>
                                        <option value="">Not prefer to say</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label>Phone Number<span style="color:red">*</span></label>
                                <input type="number" placeholder="Enter phone number" data-validation="required" />
                            </div>
                            <div class="mt-3 col">
                                <label>Email<span style="color:red">*</span></label>
                                <input type="email" placeholder="Enter email" data-validation="required" />
                            </div>
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label>Address<span style="color:red">*</span></label>
                                <input type="text" placeholder="Enter your address" data-validation="required" />
                            </div>
                            <div class="mt-3 col">
                                <label>State/Province/Region</label>
                                <input type="text" placeholder="State/Province/Region" />
                            </div>
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label>Zip/Postal Code</label>
                                <input type="text" placeholder="Zip/Postal Code">
                            </div>
                            <div class="mt-3 col">
                                <label>Country of Birth</label>
                                <input type="text" placeholder="Enter Country of Birth">
                            </div>
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label for="status"> Family Status </label>
                                <div class="select-box">
                                    <select id="drop-down" name="status">
                                        <option value="">Select family status</option>
                                        <option value="">Single</option>
                                        <option value="">Married</option>
                                        <option value="">Defacto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 col">
                                <label for="Citizenship"> Citizenship Status </label>
                                <div class="select-box">
                                    <select id="drop-down" name="Citizenship">
                                        <option value="">Select Citizenship</option>
                                        <option value="">Permanent Residant</option>
                                        <option value="">Temporary Visitors</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 input-box">
                            <label for="Religion">Religion</label>
                            <input type="text" placeholder="Enter Religion">
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <h5>What does Participant Identify as?<span style="color:red">*</span></h5>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender" />
                                    <label for="aboriginal">Aboriginal</label>
                                </div>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender" />
                                    <label for="option2">Torres Strait</label>
                                </div>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender" />
                                    <label for="both">Both</label>
                                </div>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender" />
                                    <label for="neither">Neither</label>
                                </div>
                            </div>
                            <div class="mt-3 col">
                                <h5>Does Participant require an Interpreter?<span style="color:red">*</span></h5>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender1" />
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender1" />
                                    <label for="no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>If Yes, State Preferred Language</label>
                            <input type="textarea" placeholder="Enter Preferred Language">
                        </div>
                        <div class="mt-3">
                            <button class="button btn-navigate-form-step" type="button" step_number="2"
                                onclick="return validateForm()">Next</button>
                        </div>
                    </section>
                    <!-- Step 2 Content, default hidden on page load. -->
                    <section id="step-2" class="form-step d-none">
                        <h2 class="font-normal">Service Details</h2>
                        <!-- Step 2 input fields -->
                        <div class="mt-3">
                            <label for="disability" class='required'> Participant Disability<span
                                    style="color:red">*</span></label>
                            <div class="radio">
                                <input type="checkbox" id="yes" name="Vision" value="yes" class="checked">
                                <label for="">Vision</label><br>

                                <input type="checkbox" id="no" name="Hearing" value="no" class="checked">
                                <label for="">Hearing</label><br>

                                <input type="checkbox" id="no" name="Mental Health" value="no" class="checked">
                                <label for="">Mental Health</label><br>

                                <input type="checkbox" id="no" name="Intellectual" value="no" class="checked">
                                <label for="">Intellectual</label><br>

                                <input type="checkbox" id="no" name="Acquired Brain Injury" value="no" class="checked">
                                <label for="">Acquired Brain Injury</label><br>

                                <input type="checkbox" id="no" name="Autism Spectrum Disorder" value="no"
                                    class="checked">
                                <label for="">Autism Spectrum Disorder</label><br>

                                <input type="checkbox" id="no" name="Physical Disability" value="no" class="checked">
                                <label for="">Physical Disability</label><br>

                                <input type="checkbox" id="no" name="fav_language" value="no" class="checked">
                                <label for="">Other</label><br>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>If Other, Please Specify:</label>
                            <input type="text" placeholder=" ">
                        </div>
                        <div class="mt-3">
                            <label>Participant’s Primary Diagnosis / Primary Disability</label>
                            <input type="textarea" placeholder=" ">
                        </div>
                        <div class="mt-3">
                            <label for="address" class='required'>Please indicate how we can follow-up on your inquiry
                                (ie. NDIS support
                                etc.) </label>
                            <textarea id="" name="" row-1="10" cols="50" placeholder=""></textarea>
                        </div>
                        <div class="mt-3">
                            <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                            <button class="button btn-navigate-form-step" type="button" step_number="3">Next</button>
                        </div>
                    </section>
                    <!-- Step 3 Content, default hidden on page load. -->
                    <section id="step-3" class="form-step d-none">
                        <h2 class="font-normal">Refered By</h2>
                        <!-- Step 3 input fields -->
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label for="first_name" class='required'>First Name<span style="color:red">*</span>
                                </label>
                                <input type="text" name="first_name" placeholder="Refferer First Name"
                                    data-validation="required" />
                            </div>
                            <div class="mt-3 col">
                                <label for="last_name" class='required'> Last Name<span style="color:red">*</span>
                                </label>
                                <input type="text" name="first_name" placeholder="Refferer First Name"
                                    data-validation="required" />
                            </div>
                        </div>
                        <div class="row-1">
                            <div class="mt-3 col">
                                <label>Phone Number<span style="color:red">*</span></label>
                                <input type="number" placeholder="Enter Phone Number" data-validation="required">
                            </div>
                            <div class="mt-3 col">
                                <label>Email<span style="color:red">*</span></label>
                                <input type="email" placeholder="Enter Referer Email" data-validation="required">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Position</label>
                            <input type="text" placeholder="Referer Position">
                        </div>
                        <div class="mt-3">
                            <label>Organisation Name (if applicable):</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="mt-3">
                            <label>Message:</label>
                            <textarea id="" name="" row-1="10" cols="50" placeholder=""></textarea>
                        </div>
                        <div class="mt-3 ">
                            <button class="button btn-navigate-form-step" type="button" step_number="2">Prev</button>
                            <button class="button submit-btn" id="myInput" type="submit"
                                onclick="return validateForm()">Save</button>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>


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
    <script src="js/refer.js"></script>
</body>
<?php
include('footer1.php')
    ?>

</html>