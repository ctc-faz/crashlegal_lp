var orientationValue;
var winWidth = $(window).width();
var winHeight = $(window).height();

$(document).ready(function ($) {


    //resizeMap();
    winOrientation();

    $('.map')
        .click(function () {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function () {
            $(this).find('iframe').removeClass('clicked')
        });


    var heightVideo = $('#banner .full').height() - $('#banner .caption').height();
    $('.video iframe').css('height', heightVideo);
    if ($(window).height() <= 799) {
        $('.video iframe').css('height', '450px');
    }



    var heightMap = $('.same-height-map .height-map-relative').height();

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
})(jQuery);



$(window).resize(function () {
    winOrientation();
    // resizeMap();

});

$(window).load(function () {
    winOrientation();
    //resizeMap();

});

function winOrientation() {
    var winWidth = $(window).width();
    var winHeight = $(window).height();

    if (winWidth >= winHeight) {
        orientationValue = "landscape";
    } else {
        orientationValue = "portrait";
    }



}

// function resizeMap() {

//     if (orientationValue == "landscape") {
//         $('.map').height(10);
//         value = $('.section-4 .row').height();
//         $('.map').height(value);

//         url = $('#googleMap').attr('src');
//         console.log(url);
//         $('#googleMap').attr('src', url);
//     } else {
//         $('.map').height('100%');
//     }
// };
