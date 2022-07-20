var orientationValue;
var winWidth = $(window).width();
var winHeight = $(window).height();
var verticalMVA = false;
var verticalMedical = false;
var verticalProdLia = false;
var verticalSlip = false;
var verticalWorkers = false;
var check1;
var check2;
var check3;
var check4;
var check5;
var var_lp;
var var_language;
var var_lp_test;
var var_lp_redirect_url;
var var_hospitalized;
var var_representing;
var var_car;
var var_motorcycle;
var var_truck;
var var_medical;
var var_work;
var var_slip;
var var_prod_lia;
var var_year;
var var_first_name;
var var_last_name;
var var_state;
var var_zip_code;
var var_email_address;
var var_phone_home;
var var_description;
jQuery(document).ready(function ($) {
    resizeMap();
    winOrientation();
    $('#btn_form, #btn_form2').click(function () {
        $('html, body').animate({scrollTop: ($(".form-contact").offset().top - $(window).width() * .16)}, 500);
    });
    $('.map').click(function () {
        $(this).find('iframe').addClass('clicked')
    }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
    });
    var heightVideo = $('#banner .full').height() - $('#banner .caption').height();
    $('.video iframe').css('height', heightVideo);
    if ($(window).height() <= 799) {
        $('.video iframe').css('height', '450px');
    }
    var heightMap = $('.same-height-map .height-map-relative').height();
    console.log(heightMap);
    $('.map iframe').height(heightMap);
    if ($(window).height() <= 799 || $(window).width() <= 1024) {
        $('.map iframe').css('height', '450px');
    }
    $(window).resize(function () {
        heightMap = $('.same-height-map .height-map-relative').height();
        $('.map iframe').height(heightMap);
        if ($(window).height() <= 799 || $(window).width() <= 1024) {
            $('.map iframe').css('height', '450px');
            $('.video iframe').css('height', '25em');
        }
    });
});

function submitData() {
    var url = "/webhook.php";
    var_lp = $('#lp').val();
    var_language = $('#language').val();
    var_lp_test = $('#lp_test').val();
    var_lp_redirect_url = $('#lp_redirect_url').val();
    var_hospitalized = $('#hospitalized').val();
    var_representing = $('#representing').val();
    var_car = $('#car:checked').val();
    var_motorcycle = $('#motorcycle:checked').val();
    var_truck = $('#truck:checked').val();
    var_medical = $('#medical:checked').val();
    var_work = $('#work:checked').val();
    var_slip = $('#slip:checked').val();
    var_prod_lia = $('#prod_lia:checked').val();
    var_year = $('#year').val();
    var_first_name = $('#first_name').val();
    var_last_name = $('#last_name').val();
    var_state = $('#state').val();
    var_zip_code = $('#zip_code').val();
    var_email_address = $('#email_address').val();
    var_phone_home = $('#phone_home').val();
    var_description = $('#description').val();
    if (var_car == "yes" || var_motorcycle == "yes" || var_truck == "yes") {
        verticalMVA = true;
    }
    if (var_medical == "yes") {
        verticalMedical = true;
    }
    if (var_work == "yes") {
        verticalWorkers = true;
    }
    if (var_slip == "yes") {
        verticalSlip = true;
    }
    if (var_prod_lia == "yes") {
        verticalProdLia = true;
    }
    setTimeout(function () {
        if (verticalMVA == true) {
            if (var_language != "Spanish") {
                sendForm('32', '5a331a3790ad7');
            } else {
                sendForm('37', '5a3993bf8445e');
            }
            check1 = true;
        } else {
            check1 = true;
        }
    }, 100);
    setTimeout(function () {
        if (verticalMedical == true) {
            if (var_language != "Spanish") {
                sendForm('33', '5a39a23294733');
            } else {
                sendForm('38', '5a39a3a58f1c2');
            }
            check2 = true;
        } else {
            check2 = true;
        }
    }, 200);
    setTimeout(function () {
        if (verticalWorkers == true) {
            if (var_language != "Spanish") {
                sendForm('34', '5a39a509a180e');
            } else {
                sendForm('42', '5a39a5251c1a5');
            }
            check3 = true;
        } else {
            check3 = true;
        }
    }, 300);
    setTimeout(function () {
        if (verticalSlip == true) {
            if (var_language != "Spanish") {
                sendForm('36', '5a39a4dd4506e');
            } else {
                sendForm('40', '5a39a4eeccdd8');
            }
            check4 = true;
        } else {
            check4 = true;
        }
    }, 400);
    setTimeout(function () {
        if (verticalProdLia == true) {
            if (var_language != "Spanish") {
                sendForm('35', '5a39a4a4d171d');
            } else {
                sendForm('39', '5a39a4c1c528c');
            }
            check5 = true;
            if (var_language != "Spanish") {
                sendAutoResponse(var_first_name, var_email_address);
            } else {
                sendAutoResponseSP(var_first_name, var_email_address);
            }
        } else {
            check5 = true;
            if (var_language != "Spanish") {
                sendAutoResponse(var_first_name, var_email_address);
            } else {
                sendAutoResponseSP(var_first_name, var_email_address);
            }
        }
    }, 500);
};

function sendAutoResponse(var_name, var_email) {
    $.ajax({
        type: "POST", url: "auto-response.php", data: {name: var_name, email: var_email}, success: function (data) {
            thanksPage();
        }
    });
}

function sendAutoResponseSP(var_name, var_email) {
    $.ajax({
        type: "POST",
        url: "auto-response-sp.php",
        data: {name: var_name, email: var_email},
        success: function (data) {
            thanksPageSp();
        }
    });
}

function sendForm(offer_id, campaign_id) {
    $.ajax({
        type: "POST",
        url: "/webhook.php",
        data: {
            lp_offer_id: offer_id,
            lp_campaign_id: campaign_id,
            lp: var_lp,
            language: var_language,
            lp_test: var_lp_test,
            lp_redirect_url: "",
            hospitalized: var_hospitalized,
            representing: var_representing,
            car: var_car,
            motorcycle: var_motorcycle,
            truck: var_truck,
            medical: var_medical,
            work: var_work,
            slip: var_slip,
            prod_lia: var_prod_lia,
            year: var_year,
            first_name: var_first_name,
            last_name: var_last_name,
            state: var_state,
            zip_code: var_zip_code,
            email_address: var_email_address,
            phone_home: var_phone_home,
            description: var_description
        },
        success: function (data) {
        }
    });
}

function thanksPage() {
    if (check1 == true && check2 == true && check3 == true && check4 == true && check5 == true) {
        window.location = 'thankyou.html'
    }
}

function thanksPageSp() {
    if (check1 == true && check2 == true && check3 == true && check4 == true && check5 == true) {
        window.location = 'thankyousp.html'
    }
}

$(window).resize(function () {
    winOrientation();
    resizeMap();
});
$(window).load(function () {
    winOrientation();
    resizeMap();
});

function winOrientation() {
    var winWidth = $(window).width();
    var winHeight = $(window).height();
    if (winWidth >= winHeight) {
        orientationValue = "landscape";
    } else {
        orientationValue = "portrait";
    }
    console.log(orientationValue);
}

function resizeMap() {
    if (orientationValue == "landscape") {
        $('.map').height(10);
        value = $('.section-4 .row').height();
        $('.map').height(value);
        url = $('#googleMap').attr('src');
        console.log(url);
        $('#googleMap').attr('src', url);
    } else {
        $('.map').height('100%');
    }
}