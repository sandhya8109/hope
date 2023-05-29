<!-- Step Wise Form Content -->
<form id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST">
    <div class="user-details">
        <!-- Step 1 Content -->
        <section id="step-1" class="form-step">
            <h2 class="font-normal">Participant Details</h2>
            <!-- Step 1 input fields -->
            <div class="column">
                <div class="mt-3 input-box">
                    <label>First Name<span style="color:red">*</span></label>
                    <input type="text" id="participantfn" placeholder="Enter first name" required />
                </div>
                <div class="mt-3 input-box">
                    <label>Last Name<span style="color:red">*</span></label>
                    <input type="text" id="participantln" placeholder="Enter last name" required />
                </div>
            </div>
            <div class="column">
                <div class="mt-3 input-box">
                    <label>Date of Birth<span style="color:red">*</span></label>
                    <input type="date" id="participantbirth" placeholder="MM.DD.YYYY" required>
                </div>
                <div class="mt-3 input-box">
                    <label>Gender<span style="color:red">*</span></label>
                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="">Female</option>
                        <option value="">Male</option>
                        <option value="">Non-binary</option>
                        <option value="">Not prefer to say</option>
                    </select>
                </div>
            </div>
            <div class="mt-3">
                <label>Phone Number<span style="color:red">*</span></label>
                <input type="number" id="participantno" placeholder="Enter phone number" required>

                <label>Email<span style="color:red">*</span></label>
                <input type="email" id="participantemail" placeholder="Enter email" required>
            </div>
            <div class="mt-3">
                <label>Address<span style="color:red">*</span></label>
                <input type="text" id="participantaddress" placeholder="Enter your address" required>

                <label>State/Province/Region<span style="color:red">*</span></label>
                <input type="text" id="state" placeholder="State/Province/Region" required>
            </div>
            <div class="mt-3">
                <label>Zip/Postal Code</label>
                <input type="text" id="zip" placeholder="Zip/Postal Code">

                <label>Country of Birth</label>
                <input type="text" id="birth" placeholder="Enter Country of Birth">
            </div>
            <div class="mt-3">
                <label for="status" id="status"> Family Status </label>
                <select id="status" name="status">
                    <option value="">Select family status</option>
                    <option value="">Single</option>
                    <option value="">Married</option>
                    <option value="">Defacto</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="Citizenship" id="citizenship"> Citizenship Status </label>
                <select id="Citizenship" name="Citizenship">
                    <option value="">Select Citizenship</option>
                    <option value="">Permanent Residant</option>
                    <option value="">Temporary Visitors</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="Religion">Religion</label>
                <input type="text" id="religion" placeholder="Enter Religion">
            </div>
            <div class="mt-3">
                <label id="idea">What does the Participant identify as?</label>
                <ul>
                    <li>
                        <input type="radio" id="yes" name="fav_language" value="yes">
                        <label for="html">Aboriginal</label><br>
                    </li>
                    <li>
                        <input type="radio" id="no" name="fav_language" value="no">
                        <label for="html">Torres Strait Islander</label><br>
                    </li>
                    <li>
                        <input type="radio" id="no" name="fav_language" value="no">
                        <label for="html">Both</label><br>
                    </li>
                    <li>
                        <input type="radio" id="no" name="fav_language" value="no">
                        <label for="html">Neither</label><br>
                    </li>
                </ul>

                <label id="does">Does Participant require an interpreter?</label>
                <ul>
                    <li>
                        <input type="radio" id="yes" name="fav_language" value="yes">
                        <label for="html">Yes</label><br>
                    </li>
                    <li>
                        <input type="radio" id="no" name="fav_language" value="no">
                        <label for="html">No</label><br>
                    </li>
                </ul>
            </div>

            <div class="mt-3">
                <label>If Yes, State Preferred Language</label>
                <input type="textarea" placeholder="Enter Preferred Language">
            </div>
            <div class="mt-3">
                <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
            </div>
        </section>
        <!-- Step 2 Content, default hidden on page load. -->
        <section id="step-2" class="form-step d-none">
            <h2 class="font-normal">Service Details</h2>
            <!-- Step 2 input fields -->
            <div class="mt-3">
                <label for="date" class='required'> Participant Disability</label>
                <div class="radio">
                    <ul>
                        <input type="checkbox" id="yes" name="fav_language" value="yes">
                        <label for="">Vision</label><br>

                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Hearing</label><br>


                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Mental Health</label><br>


                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Intellectual</label><br>


                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Acquired Brain Injury</label><br>


                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Autism Spectrum Disorder</label><br>


                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Physical Disability</label><br>


                        <input type="checkbox" id="no" name="fav_language" value="no">
                        <label for="">Other</label><br>
                    </ul>
                </div>
            </div>
            <div class="mt-3">
                <label>Participant’s Primary Diagnosis / Primary Disability</label>
                <input type="textarea" id="participate" placeholder=" ">
            </div>
            <div class="mt-3">
                <label for="address" class='required'>Please indicate how we can follow-up on your inquiry (ie. NDIS
                    support
                    etc.) </label>
                <textarea id="address" name="address" row="4" cols="50" placeholder=""></textarea>
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
            <div class="mt-3">
                <label for="first_name" class='required'>First Name </label>
                <input type="text" id="first_name" name="first_name" placeholder="Refferer First Name" />

                <label for="last_name" class='required'> Last Name </label>
                <input type="text" id="last_name" name="last_name" placeholder="Refferer First Name" />
            </div>
            <div class="mt-3">
                <label>Phone Number</label>
                <input type="number" id="number" placeholder="Enter Phone Number">

                <label>Email</label>
                <input type="email" id="email" placeholder="Enter Referer Email">
            </div>
            <div class="mt-3">
                <label>Position</label>
                <input type="textfield" id="position" placeholder="Referer Position">
            </div>
            <div class="mt-3">
                <label>Organisation Name (if applicable):</label>
                <input type="textfield" id="organization" placeholder="">
            </div>
            <div class="mt-3">
                <label>Message:</label>
                <input type="textfield" id="m" placeholder="">
            </div>