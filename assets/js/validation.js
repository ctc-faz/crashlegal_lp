// JavaScript Document
//for email validation

//This is the default language.
// Spanish language is being defined on indexsp.php, under the validation.js file.
var language = 'english';

function validateForm(emailid) {
    var x = emailid;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    return !(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length);
}

$(document).ready(function() {

    $('#btn_form').click(function formvalidation() {
        var yes = $('#hospitalized').val();
        var no = $('#representing').val();
        var myErrors = "";

        if (yes.length < 1) {
            //alert("Please enter your email")

            if(language==='english'){ myErrors += "Please select Have you or a loved one been hospitalized or seen a doctor due to an injury?\n"; }
            if(language==='spanish'){ myErrors += "Por favor seleccione ¿Usted o un ser querido ha sido hospitalizado o atendido por un médico debido a una lesión?\n"; }

        }
        if (no.length < 1) {
            //alert("Please enter your email")
            if(language==='english'){ myErrors += "Please select Is an attorney representing you for this case already?\n"; }
            if(language==='spanish'){ myErrors += "Por favor seleccione ¿Ya le está representando un abogado en su caso?\n"; }
        }

        //redirect form to second form
        if (myErrors.length > 0) {
            alert(myErrors)
        } else {
            //  $(this).closest('form').submit();
            // window.location.assign('checkout.html');
            $('#step1').hide();
            $('#step2').show();
            $('#step3').hide();
            // alert("Thank You")

        }

    });

    $('#btn_form_taxotere').on('click', function formvalidation(event) {
        var yes = $('#taxotere').val()
        var no = $('#hairloss').val()
        var myErrors = "";

        if (yes.length < 1) {
            //alert("Please enter your email")
            myErrors += "Please select Were you or a loved one treated with Invokana?\n";
        }
        if (no.length < 1) {
            //alert("Please enter your email")
            myErrors += "Have you or loved one experienced severe medical complications?\n";
        }

        //redirect form to second form
        if (myErrors.length > 0) {
            alert(myErrors)
        } else {
            $('#step1').hide()
            $('#step2').show()
            $('#step3').show();
        }

    });

    $('#btn_form2').click(function formvalidation() {
        var year = $('#year').val()
        //    var checkbox=$('#checkbox').val();
        var myErrors = "";


        if (year.length < 1) {
            //alert("Please enter your email")
            if(language==='english'){ myErrors += "Please select Year of Injury\n"; }
            if(language==='spanish'){ myErrors += "Por favor seleccione Año del accidente\n"; }
        }
        var typeOfInjValue = '';

        $typeOfInj = $('#accident-type-checkboxes input');
        $.each($typeOfInj, function(key, theInput) {
            var $input = $(theInput);
            if($input.is(':checked')) {
                typeOfInjValue += $input.val()+"\n";
            }
        });

        $('#accident-type').val(typeOfInjValue);

        if (typeOfInjValue.length < 1) {
            if(language==='english'){ myErrors += "Please select what caused your injury\n"; }
            if(language==='spanish'){ myErrors += "Por favor seleccione, ¿Que causó su lesión?\n"; }
        }

        //redirect form to second form
        if (myErrors.length > 0) {
            alert(myErrors)
        } else {
            //  $(this).closest('form').submit();
            // window.location.assign('checkout.html');
            $('#step1').hide()
            $('#step2').hide()
            $('#step3').show()
            // alert("Thank You")

        }

    });
    $('#btn_form3').click(function formvalidation() {
        var fname = $('#first_name').val()
        var lname = $('#last_name').val()
        var state = $('#state').val()
        var zipcode = $('#zip_code').val()
        var email = $('#email_address').val()
        var phone = $('#phone_home').val()
        phone = phone.replace(new RegExp('[\(\)\-\.]', 'g'), '');
        $('#phone_home').val(phone);

        var description = $('#description').val()
        var myErrors = "";

        if (fname.length < 1) {
            if(language==='english'){ myErrors += "Please enter your First Name\n";}
            if(language=='spanish'){ myErrors += "Por favor colocar su Nombre \n";}
        }
        if (lname.length < 1) {
            if(language=='english'){ myErrors += "Please enter your Last Name\n";}
            if(language=='spanish'){ myErrors += "Por favor colocar su Apellido \n";}
        }
        if (state.length < 1) {
            if(language=='english'){ myErrors += "Please select your State\n";}
            if(language=='spanish'){ myErrors += "Por favor seleccione el Estado donde vive \n";}
        }
        if (zipcode.length < 5) {
            if(language=='english'){ myErrors += "Please enter your Zip Code\n";}
            if(language=='spanish'){ myErrors += "Por favor colocar su Código Postal \n";}
        }
        if (description.length < 1) {
            if(language=='english'){ myErrors += "Please enter Description\n";}
            if(language=='spanish'){ myErrors += "Por favor describa el accidente \n";}
        }
        if (email.length < 1) {
            if(language=='english'){ myErrors += "Please enter your Email\n";}
            if(language=='spanish'){ myErrors += "Por favor colocar su Email \n";}
        }
        if (email.length > 0 && !validateForm(email)) {
            if(language=='english'){ myErrors += "Email is Invalid\n";}
            if(language=='spanish'){ myErrors += "Correo electrónico no es válido \n";}
        }
        //for phone start//
        if (phoneempty > 0) {
            if(language=='english'){ myErrors += "Please enter your Phone Number\n";}
            if(language=='spanish'){ myErrors += "Por favor colocar su Número de Teléfono \n";}
        }
        var phoneempty = 0;
        if ($('#phone_home').val().length < 1) {
            phoneempty++;
        }


        if (phoneempty > 0) {
            //alert("Please enter your email")
            if(language=='english'){ myErrors += "Please enter your Phone Number\n";}
            if(language=='spanish'){ myErrors += "Por favor colocar su Número de Teléfono\n";}
        }
        var phoneerror = 0;
        $('#phone_home').each(function() {
            if (validatePhone(phone)) {

            } else {
                phoneerror++;
            }
        })

        if (phone.length > 0 && phoneerror > 0) {
            if(language=='english'){ myErrors += "Phone number is Invalid\n";}
            if(language=='spanish'){ myErrors += "Número de teléfono no es válido\n";}
        }

        ///web.archive.org/web/20181221124317/https://for phone end
        //for phone digit validation
        function validatePhone(phoneid) {
            var y = phoneid;
            if ($.isNumeric(y) && y.length === 10) {
                return true;
            } else {
                //alert("Only Numbers Allowed")
                return false;
            }
        }

        var self = this;

        var onFinish = function onFinish() {
            if (myErrors.length > 0) {
                alert(myErrors);
            } else {
                //$(self).closest('form').submit();
                submitData();
            }
        }

        if(zipcode.length > 0) {


            $.ajax('https://api.zippopotam.us/us/'+zipcode)
                .done(function(msg) {
                    $('#city-name').val(msg.places[0]['place name']);
                    onFinish();
                })
                .fail(function(err) {
                    if(language=='english'){ myErrors += "Zip Code is Invalid\n";}
                    if(language=='spanish'){ myErrors += "El código postal no es válido.\n";}
                    onFinish();
                });
        } else {
            onFinish();
        }

    });


});
