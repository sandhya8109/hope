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
    <div class="container-fluid pagerefer-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" height: 293px;
    width: 100%;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Make a Referral</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php" style="color: white;">Home</a></li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Referral</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!--Form-->
    <div class="container-fluid">
        <h1 class="display-5 mb-4" style="font-size:2.5rem; ">Do You Know Someone Who Needs Help To Live Their Best
            Life?​</h1>
        <p class="text-center mb-4" style="margin: 0 50px 0 50px; font-size: large; ">"Know someone who could benefit
            from our services? Refer them to us and help us make a difference in their lives. Your referral means a lot
            to us as we strive to extend our reach and provide
            exceptional support and care to more individuals. Thank you for considering recommending Hope Ability.”</p>
        </br>
        <h2 class="text-center" style="color: #274a84;">Please Fill In The Following Details</h2>
        <div class="container-fluid justify-content-center" style="width:90%">
            <div class="row justify-content-center">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3 justify-content-center">
                    <p class="text-center">Fill all the fields to go to next step.</p>
                    <form action="referalsend.php" method="POST" id="msform" class="justify-content-center mb-4">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Participant Info</strong></li>
                            <li id="personal"><strong>Support Ratio</strong></li>
                            <li id="payment"><strong>NDIS Plan Info</strong></li>
                            <li id="new"><strong>Contact</strong></li>
                            <li id="confirm"><strong>Referer</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Participant Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 5</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Participant's Full Name: </label>
                                        <input type="text" name="fullname" id="fullname" class="ipdetail"
                                            placeholder="Participant's Full Name" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Date of Birth: </label>
                                        <input type="date" name="birth" class="ipdetail" id="birth" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Other names (if applicable): </label>
                                        <input type="text" name="othername" class="ipdetail" id="othername"
                                            placeholder="Other Name" />
                                    </div>
                                    <div class=" col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Gender: </label>
                                        <select id="drop-down" name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="MAle">Male</option>
                                            <option value="Non-Binary">Non-binary</option>
                                            <option value="Not Prefer to say">Not prefer to say</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Residental Address: </label>
                                        <input type="text" name="address" id="address" class="ipdetail"
                                            placeholder="Residental Address" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Postal Address(if different): </label>
                                        <input type="text" name="postal" id="postal" class="ipdetail"
                                            placeholder="Postal Address" />
                                    </div>
                                </div>
                                <label class="fieldlabels">Contact Number: </label>
                                <input type="number" name="cnum" id="cnum" class="ipdetail"
                                    placeholder="Contact Number" />
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Does the Participant identify as: </label>
                                        <div class="radio">
                                            <div class="d-flex"><input type="radio" name="a" id="a"
                                                    value="Aboriginal" />
                                                <label>Aboriginal </label>
                                            </div>
                                            <div class="d-flex"><input type="radio" name="t" id="t"
                                                    value="Torres Strait" />
                                                <label>Torres Strait </label>
                                            </div>
                                            <div class="d-flex"><input type="radio" name="b" id="b"
                                                    value="Torres Strait & Aboriginal" />
                                                <label>Both </label>
                                            </div>
                                            <div class="d-flex"><input type="radio" name="n" id="n"
                                                    value="neither Torres Strait & Aboriginal" />
                                                <label>Neither </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Has the Participant consented to this referral?
                                        </label>
                                        <div class="radio">
                                            <div class="d-flex"><input type="radio" name="y" id="y" />
                                                <label>Yes </label>
                                            </div>
                                            <div class="d-flex"><input type="radio" name="n" id="n" />
                                                <label>No </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="fieldlabels">Primary Diagnosis: (please attach supporting
                                    documentation)</label>
                                <textarea id="" name="primary" id="primary" rows="5" cols="50"
                                    placeholder="Primary Diagnosis"></textarea>
                                <input name="foo" type="file" class="ipdetail"
                                    accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                                <label class="fieldlabels">Secondary Disability(ies) or other presenting issues:</label>
                                <textarea id="" name="second" id="second" row-1="10" cols="50"
                                    placeholder="Secondary Disability(ies)"></textarea>
                                <label class="fieldlabels">Communication Status:</label>
                                <input type="text" name="status" class="ipdetail"
                                    placeholder=" (eg. verbal,sign etc)" />
                                <label class="fieldlabels">Communication assessment:</label>
                                <div class="checkbox">
                                    <div class="d-flex"><input type="checkbox" name="complete" id="complete"
                                            value="Completed and attached" />
                                        <label>Completed and attached </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" name="not" id="not"
                                            value="Not available" />
                                        <label>Not available </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" name="nap" id="nap"
                                            value="Not Applicable" />
                                        <label>Not applicable </label>
                                    </div>
                                </div>
                                <label class="fieldlabels">Personal Mobility Aids: </label>
                                <input type="text" name="aids" id="aids" class="ipdetail"
                                    placeholder="Personal Mobility Aids" />
                                <label class="fieldlabels">Mobility Aids required: </label>
                                <div class="checkbox">
                                    <div class="d-flex"><input type="checkbox" name="h" id="h" value="Hoisting" />
                                        <label>Hoisting </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" name="c" id="c" value="Commode" />
                                        <label>Commode </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" name="s" id="s" value="Sarah Steady" />
                                        <label>Sarah Steady </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" name="any" id="any"
                                            value="Any other Assistive Device" onclick="OnChangeCheckbox (this)" />
                                        <label>Any other Assistive Devices </label>
                                        <input type="textbox" Id="txtToggle" class="ipdetail"
                                            placeholder="please specify" style="display:none" />
                                        <script type="text/javascript">
                                            function OnChangeCheckbox(checkbox) {
                                                if (checkbox.checked) {
                                                    document.getElementById('txtToggle').style.display = "block";
                                                }
                                                else {
                                                    document.getElementById('txtToggle').style.display = "none";
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <label class="fieldlabels">Does Participant have challenging behaviours?</label>
                                <textarea id="" name="behavior" id="behavior" row-1="10" cols="50"
                                    placeholder=""></textarea>
                                <label class="fieldlabels">Does Participant have a current Behaviour Support
                                    Plan(PBSP)?</label>
                                <div class="checkbox">
                                    <input type="checkbox" value="Yes" name="pbspy" />
                                    <label>Yes </label>
                                    <div class="flex-wrap">
                                        <label style="padding-right: 3rem;">If Yes, Has a PBSB review been
                                            requested?</label>
                                        <input type="checkbox" value="Yes" name="pbspy" />
                                        <label style="padding-right: 3rem;">Yes </label>
                                        <input type="checkbox" value="Yes" name="pbspy" />
                                        <label>No </label>
                                    </div>

                                    <input type="checkbox" value="No" name="pbspn" />
                                    <label style="padding-top:2rem">No </label>
                                    <div class="flex-wrap">
                                        <label style="padding-right: 3rem;" class="flex-wrap">If No, Is PBSB required
                                            for further process?</label>
                                        <input type="checkbox" value="Yes" name="pbspy" />
                                        <label style="padding-right: 3rem;">Yes </label>
                                        <input type="checkbox" value="Yes" name="pbspy" />
                                        <label>No </label>
                                    </div>

                                </div>
                                <label class="fieldlabels">Please tick the documents that have been provided:</label>
                                <div class="checkbox">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="d-flex"><input type="checkbox" id="pbsp" name="pbsp" />
                                                <label>PBSP </label>
                                            </div>
                                            <div class="d-flex"><input type="checkbox" name="ndis" id="ndis"
                                                    value="NDIS Plan Goals" />
                                                <label>NDIS Plan Goals </label>
                                            </div>
                                            <div class="d-flex"><input type="checkbox" name="risk" id="risk"
                                                    value="Risk assessment" />
                                                <label>Risk assessment </label>
                                            </div>
                                            <div class="d-flex"><input type="checkbox" name="plan" id="plan"
                                                    value="Person Centered plan">
                                                <label>Person centered plan </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="d-flex"><input type="checkbox" name="ass" id="ass" />
                                                <label>Communication assessment </label>
                                            </div>
                                            <div class="d-flex"><input type="checkbox" name="oc" id="oc"
                                                    value-="Occupational Therapy assessment ">
                                                <label>Occupational Therapy assessment </label>
                                            </div>
                                            <div class="d-flex"><input type="checkbox" name="co" id="co"
                                                    value="Copy of NDIS plan" />
                                                <label>Copy of NDIS plan </label>
                                            </div>
                                            <div class="d-flex"><input type="checkbox" id="ot" name="ot"
                                                    onchange="javascript:toggleOtherTextboxVisible()" />Other:
                                                <input id="OtherTextBox" type="text" class="ipdetail"
                                                    placeholder="provide details" style="display:none" />
                                                <script type="text/javascript">
                                                    function toggleOtherTextboxVisible() {
                                                        var check = document.getElementById('ot');
                                                        if (check.checked) {
                                                            document.getElementById('OtherTextBox').style.display = 'block';
                                                        }
                                                        else
                                                            document.getElementById('OtherTextBox').style.display = 'none';
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Ratio of Care and Community Access:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 5</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Requested ratio of Support: </label>
                                <div class="checkbox">
                                    <label class="fieldlabels">Day </label>
                                    <div class="d-flex flex-wrap">
                                        <input type="checkbox" value="1:1" name="1" id="1" /><label
                                            style="padding-right: 1rem">1:1</label>
                                        <input type="checkbox" value="1:2" name="2" id="2" /><label
                                            style="padding-right: 1rem">1:2</label>
                                        <input type="checkbox" value="1:3" name="3" id="3" /><label
                                            style="padding-right: 1rem">1:3</label>
                                        <label>Other:<input type="text" name="4" id="4" class="ipdetail" /></label>
                                    </div>

                                    <label class="fieldlabels">Night</label>
                                    <div class="d-flex flex-wrap">
                                        <input type="checkbox" value="1:1" name="5" id="5" /><label
                                            style="padding-right: 1rem">1:1</label>
                                        <input type="checkbox" value="1:2" name="6" id="6" /><label
                                            style="padding-right: 1rem">1:2</label>
                                        <input type="checkbox" value="1:3" name="8" id="8" /><label
                                            style="padding-right: 1rem">1:3</label>
                                        <label>Other:<input type="text" name="4" id="4" class="ipdetail" /></label>
                                    </div>
                                    <label class="fieldlabels">Community Access </label>
                                    <div class="d-flex flex-wrap">
                                        <input type="checkbox" value="1:1" name="9" id="9" /><label
                                            style="padding-right: 1rem">1:1</label>
                                        <input type="checkbox" value="1:2" name="10" id="10" /><label
                                            style="padding-right: 1rem">1:2</label>
                                        <input type="checkbox" value="1:3" name="11" id="11" /><label
                                            style="padding-right: 1rem">1:3</label>
                                        <label>Other:<input type="text" name="4" id="4" class="ipdetail" /></label>
                                    </div>

                                    <div class="d-flex">
                                        <input type="checkbox" value="passive" name="p" id="p" /><label
                                            style="padding-right: 1rem">Passive</label>
                                        <input type="checkbox" value="active" name="ac" id="ac" /><label>Active</label>
                                    </div>
                                </div>
                                <label class="fieldlabels">Current Community Access/Day Service: </label>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Monday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr1" id="hr1" class="ipdetail"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac1" id="Ac1" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Tuesday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr2" id="hr2" class="ipdetail"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac2" id="Ac2" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Wednesday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr3" id="hr3" class="ipdetail"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac3" id="Ac3" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Thursday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr4" id="hr4" class="ipdetail"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac4" id="Ac4" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Friday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr5" id="hr5" class="ipdetail"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac5" id="Ac5" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Saturday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr6" class="ipdetail" id="hr6"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac6" id="Ac6" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Sunday: </label>
                                    </div>
                                    <div class="col-sm-6 col-md-5">Hour/time<input type="text" name="hr7" id="hr7" class="ipdetail"
                                            placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        Activity<input type="text" name="Ac7" id="Ac7" class="ipdetail"
                                            placeholder="" /></div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">NDIS Plan:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 5</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">NDIS Plan Approved?</label>
                                <div class="checkbox">
                                    <div class="d-flex">
                                        <input type="checkbox" value="yes" name="ay" id="ay" />
                                        <label>Yes </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" value="Pending" name="ap" id="ap" />
                                        <label>Pending(waiting response) </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" value="Not Commenced" name="nc"
                                            id="nc" />
                                        <label>Not commenced </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" value="Not applicable" name="an"
                                            id="an" />
                                        <label>Not Applicable </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <label class="fieldlabels">NDIS Number: </label>
                                        <input type="text" name="nm" id="nm" class="ipdetail"
                                            placeholder="NDIS Number " />
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <label class="fieldlabels">Plan Start Date: </label>
                                        <input type="date" name="pd" id="pd" class="ipdetail" placeholder="" />
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-lg-4">
                                        <label class="fieldlabels">Plan End Date: </label>
                                        <input type="date" name="em" id="em" class="ipdetail" placeholder="" />
                                    </div>
                                </div>
                                <label class="fieldlabels">If NDIS not funded,What is the Funding Source?</label>
                                <input type="text" name="fd" id="fd" class="ipdetail" placeholder="Funding Source" />
                                <label class="fieldlabels">NDIS COS Details:</label>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Name: </label>
                                        <input type="text" name="Nm" id="Nm" class="ipdetail" placeholder="Name" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Organization: </label>
                                        <input type="text" name="NO" id="NO" class="ipdetail"
                                            placeholder="Organization" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Email: </label>
                                        <input type="email" name="NE" id="NE" class="ipdetail" placeholder="Email" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Phone: </label>
                                        <input type="number" name="NP" id="NP" class="ipdetail" placeholder="Phone" />
                                    </div>
                                </div>
                                <label class="fieldlabels">Plan Management:</label>
                                <div class="checkbox">
                                    <div class="d-flex"><input type="checkbox" value="Agency Managed" name="AM"
                                            id="AM" />
                                        <label>Agency Managed </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" value="Plan managed" name="PM" id="PM" />
                                        <label>Plan managed </label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" value="Self managed" name="SM" id="SM" />
                                        <label>Self managed </label>
                                    </div>
                                </div>
                                <label class="fieldlabels">If Plan Managed, Contact Details of Plan Manager:</label>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Name: </label>
                                        <input type="text" name="PMn" id="PMn" class="ipdetail" placeholder="Name" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Organization: </label>
                                        <input type="text" name="PMo" id="PMo" class="ipdetail"
                                            placeholder="Organization" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Email: </label>
                                        <input type="email" name="PMe" id="PMe" class="ipdetail" placeholder="Email" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Phone: </label>
                                        <input type="phone" id="PMnn" name="PMnn" class="ipdetail"
                                            placeholder="Phone" />
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Contact Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 5</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Participant/Parent/Guardian:</label>
                                <input type="text" name="PPGN" id="PPGN" class="ipdetail"
                                    placeholder="Participant/Parent/Guardian">
                                <label class="fieldlabels">Address:</label>
                                <input type="text" name="PPGA" id="PPGA" class="ipdetail" placeholder="Address">
                                <label class="fieldlabels">Email:</label>
                                <input type="email" name="PPGE" id="PPGE" class="ipdetail" placeholder="Email">
                                <label class="fieldlabels">Contact Numbers:</label>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Home: </label>
                                        <input type="number" name="PPGH" id="PPGH" class="ipdetail" value="Home"
                                            placeholder="Home" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Mobile: </label>
                                        <input type="number" name="PPGM" id="PPGM" class="ipdetail" value="Mobile"
                                            placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Date: </label>
                                        <input type="date" name="PPGD" id="PPGD" class="ipdetail" placeholder="" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Signature :</label>
                                        <input type="text" name="PPGS" id="PPGS" class="ipdetail"
                                            placeholder="Print Name">
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Contact Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 5 - 5</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Relationship to Client:</label>
                                <div class="checkbox">
                                    <div class="d-flex"><input type="checkbox" name="G" id="G" value="Guardian" />
                                        <label>Guardian (completed above,no further details required)</label>
                                    </div>
                                    <div class="d-flex"><input type="checkbox" name="C" id="C"
                                            value="Coordinator of Supports" />
                                        <label>Coordinator of Supports (complete referrer details)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Organisation: </label>
                                        <input type="text" name="O" id="O" class="ipdetail"
                                            placeholder="Organisation" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Name: </label>
                                        <input type="text" name="N" id="N" class="ipdetail" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Contact Number: </label>
                                        <input type="Number" name="CN" id="CN" class="ipdetail" placeholder="Contact" />
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6"><label class="fieldlabels">Email: </label>
                                        <input type="email" name="E" id="E" class="ipdetail" placeholder="Email" />
                                    </div>
                                </div>
                                <label class="fieldlabels">Postal Address: </label>
                                <input type="text" name="P" id="P" class="ipdetail" placeholder="Postal Address" />
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Signature</label>
                                        <input type="text" name="SP" id="SP" class="ipdetail" placeholder="Print Name">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="fieldlabels">Date: </label>
                                        <input type="date" name="D" id="D" class="ipdetail" placeholder="Mobile" />
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="next" class="next action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Referer Details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 5 - 5</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>Submitted Successfully !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="./img/icons8-tick-100.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">Thank you for your referral.</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
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