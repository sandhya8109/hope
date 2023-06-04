$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }
    
    $(".submit").click(function(){
    return false;
    })
    
    });
    // Form validation
    const form = document.getElementById('msform');
    form.addEventListener('submit', validateForm);

    function validateForm(event) {
        event.preventDefault();

        const fullName = document.getElementById('fullName');
        const dob = document.getElementById('dob');
        const gender = document.getElementById('gender');
        const residentialAddress = document.getElementById('residentialAddress');
        const contactNumber = document.getElementById('contactNumber');
        const identification = document.getElementsByName('identification');
        const interpreterRequired = document.getElementsByName('interpreterRequired');
        const preferredLanguage = document.getElementById('preferredLanguage');
        const culturalLeader = document.getElementsByName('culturalLeader');
        const ratioOfCare = document.getElementById('ratioOfCare');
        const communityAccess = document.getElementById('communityAccess');
        const ndisStartDate = document.getElementById('ndisStartDate');
        const ndisEndDate = document.getElementById('ndisEndDate');
        const contactPersonName = document.getElementById('contactPersonName');
        const relationshipToParticipant = document.getElementById('relationshipToParticipant');
        const contactPersonContact = document.getElementById('contactPersonContact');
        const referrerName = document.getElementById('referrerName');
        const referrerContact = document.getElementById('referrerContact');

        // Validate all the fields
        if (
            !fullName.value ||
            !dob.value ||
            !gender.value ||
            !residentialAddress.value ||
            !contactNumber.value ||
            !getRadioValue(identification) ||
            !getRadioValue(interpreterRequired) ||
            !preferredLanguage.value ||
            !getRadioValue(culturalLeader) ||
            !ratioOfCare.value ||
            !communityAccess.value ||
            !ndisStartDate.value ||
            !ndisEndDate.value ||
            !contactPersonName.value ||
            !relationshipToParticipant.value ||
            !contactPersonContact.value ||
            !referrerName.value ||
            !referrerContact.value
        ) {
            alert('Please fill in all the required fields.');
            return;
        }

        // You can perform additional validation if required

        // Submit the form if all validation passes
        form.submit();
    }

    function getRadioValue(radioElements) {
        for (let i = 0; i < radioElements.length; i++) {
            if (radioElements[i].checked) {
                return radioElements[i].value;
            }
        }
        return '';
    }

