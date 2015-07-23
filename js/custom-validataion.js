(function($,W,D)
{
    var formvalidation = {};
 
    formvalidation.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $(".userregister").validate({
                rules: {
                    fullname: "required",
                    country: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        required: true,
                        digits: true,
                        minlength: 10,
                    },
                    dob: "required",
                    about: "required"
                },
                messages: {
                    fullname: "Please enter your full name",
                    country: "Please enter your country",
                    mobile: {
                        required: "Please provide a mobile number",
                        digits: "Only numbers are allowed in number",
                        minlength: "Your mobile number must be at exact 10 digits long",
                    },
                    email: "Please enter a valid email address",
                    dob: "Please enter your date of birth",
                    about: "Tell us something about yourself"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
 
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        formvalidation.UTIL.setupFormValidation();
    });
 
})(jQuery, window, document);


// Datepicker 

$(function () {
    $('#datetimepicker1').datetimepicker({
        format: 'DD/MM/YYYY'
    });
});