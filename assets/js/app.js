// JavaScript Document
jQuery.validator.addMethod("phone", function(value, element) {
    return this.optional(element) || /^[0-9]{10,11}$/i.test(value);
}, "Phone Requires 10 Digits");

jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 &&
    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}|[0-9]{10,11}$/);
}, "Please specify a valid phone number");

$.validator.addMethod("fields_phone", function(value, element) {
    return this.optional(element) || ((/^[2-9][0-9]{2}$/i.test(value)));
}, "Area Code can't start with 1 or 0.");

jQuery.validator.addMethod("cvv", function(value, element) {
    return this.optional(element) || (/^[0-9]{3,4}$/i.test(value) && !/^[0]+$/.test(value));
}, "<strong>CVV</strong>  Minimum of 3 Digits");

jQuery.validator.addMethod("letterswithbasicpunc", function(value, element) {
    return this.optional(element) || /^[a-z\-.,()'"\s]+$/i.test(value);
}, "Letters or punctuation only please");

jQuery.validator.addMethod("integer", function(value, element) {
    return this.optional(element) || (/^-?\d+$/.test(value) && !/^[0]+$/.test(value));
}, "A positive or negative non-decimal number please");


$(document).ready(function($){
    // alert('working');

 
    $('#opt_in_form').validate({
        debug:false,
        rules: {
            fields_state: "required",
            fields_phone: {
                required: true,
                integer: true,
                minlength: 3
            },
            fields_address1: "required",
            fields_email: "required email",
            fields_fname: "required",
            fields_city: "required",
            fields_lname: "required",
            fields_zip: {
                required: true,
                integer: true,
                minlength: 5
            }
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            error.appendTo(element.parent());
        },
        messages: {
            fields_phone: {
                required: "<strong>Number</strong> is required",
                integer: "Please enter a valid <strong>Number</strong>",
                minlength: "Please enter a valid <strong>Number</strong>"
            },
            fields_address1: {
                required: "<strong>Street Address</strong> is required"
            },
            fields_zip: {
                required: "<strong>ZIP</strong> is required",
                integer: "Please enter a valid <strong>ZIP</strong>",
                minlength: "Please enter a valid <strong>ZIP</strong>"
            },
            fields_email: {
                required: "<strong>Email Address</strong> is required"
            },
            fields_state: {
                required: "<strong>State</strong> is required"
            },
            fields_city: {
                required: "<strong>City</strong> is required"
            },
            fields_fname: {
                required: "<strong>First Name</strong> is required"
            },
            fields_lname: {
                required: "<strong>Last Name</strong> is required"
            }
        },
        submitHandler: function(form) {
//            var phone_nmbr = $('#fields_phone_temp');
//            var hidden_phone = $('#fields_phone');
//            if(phone_nmbr.val() != '')
//            {
//                hidden_phone.val(phone_nmbr.val());
//            }
//            form_validator();
            form.submit();
        }
    });
//alert('applied');

});