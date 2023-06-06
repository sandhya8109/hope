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
    <div class="container-fluid pagerefer-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Refer a Participant</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php" style="color: white;">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Referral</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!--Form-->
    <div class="container-fluid">
        <h1 class="display-5 mb-4" style="font-size:2.5rem; ">Do You Know Someone Who Needs Help To Live Their Best
            Life?​</h1>
        <p class="text-center mb-4" style="margin: 0 8rem 0 8rem; font-size: large; ">"Know someone who could benefit
            from our services? Refer them to us and help us make a
            difference in their lives. Your referral means a lot to us as we strive to extend our reach and provide
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
                            <li id="personal"><strong>Ratio</strong></li>
                            <li id="payment"><strong>NDIS</strong></li>
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
                                    <div class="col">
                                        <label class="fieldlabels">Participant's Full Name: </label> <input type="text"
                                            name="fullname" id="fullname" placeholder="Participant's Full Name" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Date of Birth: </label> <input
                                            type="date" name="birth" id="birth" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Other names(if applicable): </label> <input
                                            type="text" name="othername" id="othername" placeholder="Other Name" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Gender: </label> <select id="drop-down"
                                            name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="MAle">Male</option>
                                            <option value="Non-Binary">Non-binary</option>
                                            <option value="Not Prefer to say">Not prefer to say</option>
                                        </select></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Residental Address: </label> <input type="text"
                                            name="address" id="address" placeholder="Residental Address" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Postal Address(if different): </label>
                                        <input type="text" name="postal" id="postal" placeholder="Postal Address" />
                                    </div>
                                </div>
                                <label class="fieldlabels">Contact Number: </label> <input type="number" name="cnum"
                                    id="cnum" placeholder="Contact Number" />
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Does the Participant identify as: </label>
                                        <div class="radio">
                                            <div class="row">
                                                <div class="col d-flex">
                                                    <label class="fieldlabels">Aboriginal </label>
                                                    <label class="fieldlabels">Torres Strait </label>
                                                </div>
                                                <div class="col"><input type="radio" name="a" id="a"
                                                        value="Aboriginal" />
                                                    <input type="radio" name="a" id="a" value="Aboriginal" />
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <label class="fieldlabels">Aboriginal </label> <input type="radio"
                                                    name="a" id="a" value="Aboriginal" />
                                            </div>
                                            <div class="d-flex"><label class="fieldlabels">Torres Strait </label> <input
                                                    type="radio" name="t" id="t" value="Torres Strait" /></div>
                                            <div class="d-flex"><label class="fieldlabels">Both </label> <input
                                                    type="radio" name="b" id="b" value="Torres Strait & Aboriginal" />
                                            </div>
                                            <div class="d-flex"><label class="fieldlabels">Neither </label> <input
                                                    type="radio" name="n" id="n"
                                                    value="neither Torres Strait & Aboriginal" /></div>
                                        </div>
                                    </div>
                                    <div class=" col"><label class="fieldlabels">Has the Participant consented to this
                                            referral? </label>
                                        <div class="radio">
                                            <label class="fieldlabels">Yes </label> <input type="radio" name="y"
                                                id="y" />
                                            <label class="fieldlabels">No </label> <input type="radio" name="n"
                                                id="n" />
                                        </div>
                                    </div>
                                </div>
                                <label class="fieldlabels">Primary Diagnosis: (please attach supporting
                                    documentation)
                                </label> <textarea id="" name="primary" id="primary" rows="10" cols="50"
                                    placeholder="Primary Diagnosis">
                            </textarea>
                                <label class="fieldlabels">Secondary Disability(ies) or other presenting issues:
                                </label> <textarea id="" name="second" id="second" row-1="10" cols="50"
                                    placeholder="Secondary Disability(ies)">
                            </textarea>
                                <label class="fieldlabels">Communication Status:</label> <input type="text"
                                    name="status" placeholder=" (eg. verbal,sign etc)" />
                                <label class="fieldlabels">Communication assessment:</label>
                                <div class="checkbox">
                                    <label class="fieldlabels">Completed and attached </label> <input type="checkbox"
                                        name="complete" id="complete" value="Completed and attached" />
                                    <label class="fieldlabels">Not available </label> <input type="checkbox" name="not"
                                        id="not" value="Not available" />
                                    <label class="fieldlabels">Not applicable </label> <input type="checkbox" name="nap"
                                        id="nap" value="Not Applicable" />
                                </div>
                                <label class="fieldlabels">Personal Mobility Aids: </label> <input type="text"
                                    name="aids" id="aids" placeholder="Personal Mobility Aids" />
                                <label class="fieldlabels">Mobility Aids required: </label>
                                <div class="checkbox">
                                    <label class="fieldlabels">Hoisting </label> <input type="checkbox" name="h" id="h"
                                        value="Hoisting" />
                                    <label class="fieldlabels">Commode </label> <input type="checkbox" name="c" id="c"
                                        value="Commode" />
                                    <label class="fieldlabels">Sarah Steady </label> <input type="checkbox" name="s"
                                        id="s" value="Sarah Steady" />
                                    <label class="fieldlabels">Any other Assistive Devices </label> <input
                                        type="checkbox" name="any" id="any" value="Any other Assistive Device"
                                        onchange="javascript:toggleOtherTextboxVisible()" />
                                    <input id="OtherTextBox" type="text" style="display:none"
                                        placeholder="please specify" />
                                    <script type="text/javascript">
                                        function toggleOtherTextboxVisible() {
                                            var check = document.getElementById('OtherCheckBox');
                                            if (check.checked) {
                                                document.getElementById('OtherTextBox').style.display = 'block';
                                            }
                                            else
                                                document.getElementById('OtherTextBox').style.display = 'none';
                                        }
                                    </script>
                                </div>
                                <label class="fieldlabels">Does Participant have challenging behaviours?
                                </label> <textarea id="" name="behavior" id="behavior" row-1="10" cols="50"
                                    placeholder="">
                            </textarea>
                                <label class="fieldlabels">Does Participant have a current Behaviour Support
                                    Plan(PBSP)?
                                </label>
                                <div class="checkbox">
                                    <label class="fieldlabels">Yes </label> <input type="checkbox" value="Yes"
                                        name="pbspy" />
                                    <label class="fieldlabels">No </label> <input type="checkbox" value="No"
                                        name="pbspn" />
                                </div>
                                <label class="fieldlabels">Please tick the documents that have been provided:
                                </label>
                                <div class="checkbox">
                                    <div class="col">
                                        <label class="fieldlabels">PBSP </label> <input type="checkbox" id="pbsp"
                                            name="pbsp" />
                                        <label class="fieldlabels">NDIS Plan Goals </label> <input type="checkbox"
                                            name="ndis" id="ndis" value="NDIS Plan Goals" />
                                        <label class="fieldlabels">Risk assessment </label> <input type="checkbox"
                                            name="risk" id="risk" value="Risk assessment" />
                                        <label class="fieldlabels">Person centered plan </label> <input type="checkbox"
                                            name="plan" id="plan" value="Person Centered plan">
                                    </div>
                                    <div class="col">
                                        <label class="fieldlabels">Communication assessment </label> <input
                                            type="checkbox" name="ass" id="ass" />
                                        <label class="fieldlabels">Occupational Therapy assessment </label> <input
                                            type="checkbox" name="oc" id="oc" value-="Occupational Therapy assessment ">
                                        <label class="fieldlabels">Copy of NDIS plan </label> <input type="checkbox"
                                            name="co" id="co" value="Copy of NDIS plan" />
                                        <label class="fieldlabels">Other: </label> <input type="checkbox" id="ot"
                                            name="ot" onclick="OnChangeCheckbox (this)" ID="chkAssociation" />
                                        <input type="textbox" Id="txtToggle" style="display:none"
                                            placeholder="please specify" />
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
                                        </script>
                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" />
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1:1<input type="checkbox"
                                        value="1:1" name="1" id="1" />
                                    1:2<input type="checkbox" value="1:2" name="2" id="2" />1:3<input type="checkbox"
                                        value="1:3" name="3" id="3" />
                                    <label class="fieldlabels">Other </label> <input type="text" name="4" id="4" />
                                </div>
                                <div class="checkbox">
                                    <label class="fieldlabels">Night</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1:1<input type="checkbox" value="1:1" name="5"
                                        id="5" />
                                    1:2<input type="checkbox" value="1:2" name="6" id="6" />1:3<input type="checkbox"
                                        value="1:3" name="8" id="8" />
                                    <label class="fieldlabels">Other </label> <input type="text" name="7" height="7" />
                                </div>
                                <div class="checkbox">
                                    <label class="fieldlabels">Community Access </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;1:1<input type="checkbox" value="1:1" name="9" id="9" />
                                    1:2<input type="checkbox" value="1:2" name="10" id="10" />1:3<input type="checkbox"
                                        value="1:3" name="11" id="11" />
                                    <label class="fieldlabels">Other </label> <input type="text" name="12" id="12" />
                                </div>
                                <div class="checkbox">
                                    Passive<input type="checkbox" value="passive" name="p" id="p" />
                                    Active<input type="checkbox" value="active" name="ac" id="ac" /> </div>
                                <label class="fieldlabels">Current Community Access/Day Service: </label>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Monday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr1" id="hr1" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac1" id="Ac1" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Tuesday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr2" id="hr2" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac2" id="Ac2" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Wednesday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr3" id="hr3" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac3" id="Ac3" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Thursday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr4" id="hr4" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac4" id="Ac4" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Friday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr5" id="hr5" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac5" id="Ac5" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Saturday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr6" id="hr6" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac6" id="Ac6" placeholder="" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="fieldlabels">Sunday: </label>
                                    </div>
                                    <div class="col">Hour/time<input type="text" name="hr7" id="hr7" placeholder="" />
                                    </div>
                                    <div class="col">
                                        Activity<input type="text" name="Ac7" id="Ac7" placeholder="" /></div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
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
                                    <label class="fieldlabels">Yes </label> <input type="checkbox" value="yes" name="ay"
                                        id="ay" />
                                    <label class="fieldlabels">Pending(waiting response) </label> <input type="checkbox"
                                        value="Pending" name="ap" id="ap" />
                                    <label class="fieldlabels">Not commenced </label> <input type="checkbox"
                                        value="Not Commenced" name="nc" id="nc" />
                                    <label class="fieldlabels">Not Applicable </label> <input type="checkbox"
                                        value="Not applicable" name="an" id="an" />
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">NDIS Number: </label> <input type="text" name="nm"
                                            id="nm" placeholder="NDIS Number " />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Plan Start Date: </label> <input
                                            type="date" name="pd" id="pd" placeholder="" /></div>
                                    <div class="col"><label class="fieldlabels">Plan End Date: </label> <input
                                            type="date" name="em" id="em" placeholder="" /></div>
                                </div>
                                <label class="fieldlabels">If NDIS not funded,What is the Funding Source?</label>
                                <input type="text" name="fd" id="fd" placeholder="Funding Source" />
                                <label class="fieldlabels">NDIS COS Details:</label>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Name: </label> <input type="text" name="Nm" id="Nm"
                                            placeholder="Name" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Organization: </label> <input
                                            type="text" name="NO" id="NO" placeholder="Organization" /></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Email: </label> <input type="email" name="NE" id="NE"
                                            placeholder="Email" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Phone: </label> <input type="number"
                                            name="NP" id="NP" placeholder="Phone" /></div>
                                </div>
                                <label class="fieldlabels">Plan Management:</label>
                                <div class="checkbox">
                                    <label class="fieldlabels">Agency Managed </label> <input type="checkbox"
                                        value="Agency Managed" name="AM" id="AM" />
                                    <label class="fieldlabels">Plan managed </label> <input type="checkbox"
                                        value="Plan managed" name="PM" id="PM" />
                                    <label class="fieldlabels">Self managed </label> <input type="checkbox"
                                        value="Self managed" name="SM" id="SM" />
                                </div>
                                <label class="fieldlabels">If Plan Managed, Contact Details of Plan Manager:</label>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Name: </label> <input type="text" name="PMn" id="PMn"
                                            placeholder="Name" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Organization: </label> <input
                                            type="text" name="PMo" id="PMo" placeholder="Organization" /></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Email: </label> <input type="email" name="PMe"
                                            id="PMe" placeholder="Email" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Phone: </label> <input type="phone"
                                            id="PMnn" name="PMnn" placeholder="Phone" /></div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
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
                                <input type="text" name="PPGN" id="PPGN" placeholder="Participant/Parent/Guardian">
                                <label class="fieldlabels">Address:</label>
                                <input type="text" name="PPGA" id="PPGA" placeholder="Address">
                                <label class="fieldlabels">Email:</label>
                                <input type="email" name="PPGE" id="PPGE" placeholder="Email">
                                <label class="fieldlabels">Contact Numbers:</label>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Home: </label> <input type="number" name="PPGH"
                                            id="PPGH" value="Home" placeholder="Home" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Mobile: </label> <input type="number"
                                            name="PPGM" id="PPGM" value="Mobile" placeholder="Mobile" /></div>
                                </div>
                                <label class="fieldlabels">Date: </label> <input type="date" name="PPGD" id="PPGD"
                                    placeholder="" />
                                <label class="fieldlabels">Signature :</label>
                                <input type="text" name="PPGS" id="PPGS">
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
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
                                    <label class="fieldlabels">Guardian (completed above,no further details required)
                                    </label> <input type="checkbox" name="G" id="G" value="Guardian" />
                                    <label class="fieldlabels">Coordinator of Supports (complete referrer details)
                                    </label> <input type="checkbox" name="C" id="C" value="Coordinator of Supports" />
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Organisation: </label> <input type="text" name="O"
                                            id="O" placeholder="Organisation" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Name: </label> <input type="text"
                                            name="N" id="N" placeholder="Name" /></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Contact Number: </label> <input type="Number"
                                            name="CN" id="CN" placeholder="Contact" />
                                    </div>
                                    <div class="col"><label class="fieldlabels">Email: </label> <input type="email"
                                            name="E" if="E" placeholder="Email" /></div>
                                </div>
                                <label class="fieldlabels">Postal Address: </label> <input type="text" name="P" id="P"
                                    placeholder="Postal Address" />
                                <div class="row">
                                    <div class="col">
                                        <label class="fieldlabels">Signature</label>
                                        <input type="text" name="SP" id="SP">
                                    </div>
                                    <div class="col"><label class="fieldlabels">Date: </label> <input type="date"
                                            name="D" id="D" placeholder="Mobile" /></div>
                                </div>
                            </div> <input type="submit" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous"
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
                                        <h5 class="purple-text text-center">Thank you for your referral</h5>
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