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


$(document).ready(function($) {
    // alert('working');

    
    $('#opt_in_form').validate({
        debug: false,
        rules: {
            cc_type: 'required',
            'agree':'required',
            fields_expmonth: 'required',
            fields_expyear: 'required',
            cc_number: {
                required: true,
                integer: true
            },
            cc_cvv: {
                required: true,
                integer: true,
                minlength: 3
            }
        },
        errorElement: "em",
        errorPlacement: function(error, element) {
            error.appendTo(element.parent());
        },
        messages: {
            cc_number: {
                required: "<strong>CC number</strong> is required",
                integer: "Please enter a valid <strong>CC Number</strong>"
            },
            cc_cvv: {
                required: "<strong>CVV</strong> is required",
                integer: "Please enter a valid <strong>Number</strong>",
                minlength: "Please enter a valid <strong>Number</strong>"
            },
            fields_expmonth: {
                required: "<strong>Expiry month</strong> is required"
            },
            fields_expyear: {
                required: "<strong>Expiry year</strong> is required"
            },
            cc_type: {
                required: "<strong>Expiry year</strong> is required"
            },
            agree: {
                required: "Accept terms & conditions to continue"
            }
        },
        submitHandler: function(form) {
        //    form_validator();
        form.submit();
        }
    });


});