/**
 * scripts.js
 * Contains Script for basic static website named "White Graphics"
 */

new WOW().init();

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

/****************************************************************
                            PRELOADER 
****************************************************************/

$(window).on('load', function () {
    $("#preloader").delay(500).fadeOut('slow');
});

/****************************************************************
                              TEAM 
****************************************************************/

$(document).ready(function () {
    $("#team-right").owlCarousel({
        items: 2,
        autoplay: true,
        margin: 20,
        loop: true,
        nav: true,
        smartSpeed: 700,
        autoplayHoverPause: true,
        dots: false,
        navText: ['<i class="lni-chevron-left-circle"></i>', '<i class="lni-chevron-right-circle"></i>'],
    });
});

/****************************************************************
                            SERVICES
****************************************************************/

$(document).ready(function () {
    $('#services-tabs').responsiveTabs({
        animation: 'slide'
    });
});

/****************************************************************
                          STATS 
****************************************************************/

$(function () {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});


/****************************************************************
                        GOOGLE MAPS 
****************************************************************/

$(window).on('load', function () {
    var addressString = "Somaiya Ayurvihar Complex Eastern Express Highway Near Everard Nagar Sion East Mumbai, Maharashtra 400022 India"
    var myLatLng = {
        lat: 19.0460631,
        lng: 72.8688922
    };

    var myMap = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: myLatLng
    });


    var marker = new google.maps.Marker({
        position: myLatLng,
        map: myMap,
        title: "Click to See Address!"
    });

    var infoWindow = new google.maps.InfoWindow({
        content: addressString
    });

    marker.addListener('click', function () {
        infoWindow.open(myMap, marker);
    })
});

/****************************************************************
                        NAVIGATION  
****************************************************************/

// Shorthand version of document.ready
$(function () {
    showHideNav();
    $("#back-to-top").fadeOut();

    $(window).scroll(function () {
        showHideNav();
    });

    function showHideNav() {
        if ($(window).scrollTop() > 50) {
            $("nav").addClass("scrolled-navbar green-nav-top");

            $(".navbar-brand img").attr('src', "img/logo/logo-dark.png");
            $("#back-to-top").fadeIn();
        } else {
            $("nav").removeClass("scrolled-navbar green-nav-top");
            $(".navbar-brand img").attr('src', "img/logo/logo.png");
            $("#back-to-top").fadeOut();
        }
    }

});

/****************************************************************
                        MOBILE NAV 
****************************************************************/

$(function () {
    $("#mobile-nav-open-btn").click(function () {
        $("#mobile-nav").css("height", "100%");
    });

    $("#mobile-nav-close-btn, #mobile-nav a").click(function () {
        $("#mobile-nav").css("height", "0%");
    });
});

/****************************************************************
                        SMOOTH SCROLL 
****************************************************************/

$(function () {
    $("a.smooth-scroll").click(function (event) {
        event.preventDefault();
        var section_id = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section_id).offset().top + 50
        }, 1250, "easeInOutExpo")
    });
});

$(document).ready(function () {
    //Create Category
    $("#enquiry_form").validate({
        rules: {
            name: {
                required: true
            },
            phone_no: {
                required: true  
            },
            location: {
                required: true
            },
            message: {
                required: true
            },
            email: {
                required: true,
                email: true,
            }
        }

        ,
        messages: {
            name: "Please Type Your Name",
            location: "Please Type Your Company Name",
            message: "Please Type Your Your Message",
            email: "Please Type Your Email Address",
            phone_no: "Please Enter Your Phone Number"
       
        }

        ,
        submitHandler: function (form) {
            data = {
                    "name": $('#name').val(),
                    "location": $('#location').val(),
                    "message": $('#message').val(),
                    "email": $('#email').val(),
                    "phone_no": $('#phone_no').val(),
                    "action": "create_enquiry"
                }

                , $.ajax({
                    url: "form.php",
                    type: "POST",
                    data: data,
                    success: function (result) {
                        $('#name').val('');
                        $('#location').val('');
                        $('#message').val('');
                        $('#email').val('');
                        $('#phone_no').val('');
                        toastr.success("Enquiry Sent Successfully");
                    },
                    error: function (result) {
                        toastr.error("Failed to send enquiry");
                    }
                });
        }
    });
});