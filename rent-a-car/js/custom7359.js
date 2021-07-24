"use strict";


jQuery(window).load(function ($) {
// will first fade out the loading animation
    jQuery(".loaded").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery(".preloader").delay(1000).fadeOut("slow");
});

// Custom JS for the Theme
jQuery(document).ready(function ($) {
// Config 
//-------------------------------------------------------------




// Initialize Tooltip  
//-------------------------------------------------------------
    $(function () {
        $('.my-tooltip').tooltip();
    });


// Initialize jQuery Placeholder  
//-------------------------------------------------------------

    $('input, textarea').placeholder();



// Toggle Header / Nav  
//-------------------------------------------------------------

    $(document).on("scroll", function () {
        if ($(document).scrollTop() > 39) {
            $("header.nav-scroll").removeClass("large").addClass("smalls");
        } else {
            $("header.nav-scroll").removeClass("smalls").addClass("large");
        }
    });



// Initialize Datepicker
//-------------------------------------------------------------------------------


    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#pick-up-date').datepicker({
        format: DateFormat,
        weekStart: 1,
        onRender: function (date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate());
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#drop-off-date')[0].focus();
    }).data('datepicker');
    var checkout = $('#drop-off-date').datepicker({
        format: DateFormat,
        weekStart: 1,
        onRender: function (date) {
            return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function (ev) {
        checkout.hide();
    }).data('datepicker');


// Toggle Drop-Off Location
//-------------------------------------------------------------------------------
    $(".input-group.drop-off").hide();
    $(".different-drop-off").on("click", function () {
        $(".input-group.drop-off").toggle();
        $(".autocomplete-suggestions").css("width", $('.pick-up .autocomplete-location').outerWidth());
        return false;
    });



// Scroll to Top Button
//-------------------------------------------------------------------------------

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').removeClass("animated fadeOutRight");
            $('.scrollup').fadeIn().addClass("animated fadeInRight");
        } else {
            $('.scrollup').removeClass("animated fadeInRight");
            $('.scrollup').fadeOut().addClass("animated fadeOutRight");
        }
    });

    $('.scrollup, .navbar-brand').on('click',function () {
        $("html, body").animate({scrollTop: 0}, 'slow', function () {
            $("nav li a").removeClass('active');
        });
        return false;
    });




// Scroll To Animation
//-------------------------------------------------------------------------------

//    $.localScroll();


    var scrollTo = $(".scroll-to");

    scrollTo.on('click',function (event) {
        $('.modal').modal('hide');
        var position = $(document).scrollTop();
        var scrollOffset = 180;

        if (position > 39)
        {
            scrollOffset = 30;
        }

        var marker = $(this).attr('href');
        $('html, body').animate({scrollTop: $(marker).offset().top - scrollOffset}, 'slow');
        return false;
    });






// Newsletter Form
//-------------------------------------------------------------------------------

    $("#newsletter-form").submit(function () {

        var resultDiv = $('#newsletter-form-msg');
        var action = $(this).attr('action');
        var form = $(this);

        resultDiv.html(' ').hide();

        $.ajax({
            url: action,
            type: 'POST',
            data: form.serialize(),
            success: function (data) {
                resultDiv.html(data).show();
            }
        });

        return false;
    });





// Car Select Form
//-------------------------------------------------------------------------------

    $("#car-select-form").submit(function () {

        var selectedCar = $("#car-select").find(":selected").text();
        var selectedCarVal = $("#car-select").find(":selected").val();
        var selectedCarImage = $("#car-select").val();
        var pickupLocation = $("#pick-up-location").val();
        var dropoffLocation = $("#drop-off-location").val();
        var pickUpDate = $("#pick-up-date").val();
        var pickUpTime = $("#pick-up-time").val();
        var dropOffDate = $("#drop-off-date").val();
        var dropOffTime = $("#drop-off-time").val();

        var error = 0;

        if (validateNotEmpty(selectedCarVal)) {
            error = 1;
        }
        if (validateNotEmpty(pickupLocation)) {
            error = 1;
        }
        if (validateNotEmpty(pickUpDate)) {
            error = 1;
        }
        if (validateNotEmpty(dropOffDate)) {
            error = 1;
        }

        var data = "";

        if (0 == error)
        {

            $("#selected-car-ph").html(selectedCar);
            data = data + selectedCars + ': ' + selectedCar + '\n';
            $("#selected-vehicle-image").attr('src', selectedCarImage);

            $("#pickup-location-ph").html(pickupLocation);
            data = data + pickUpLocation + ': ' + pickupLocation + '\n';

            if ("" == dropoffLocation)
            {
                $("#dropoff-location-ph").html(pickupLocation);
                $("#dropoff-location").val(pickupLocation);
                data = data + DropOffLocation + ': ' + pickupLocation + '\n';
            } else
            {
                $("#dropoff-location-ph").html(dropoffLocation);
                data = data + DropOffLocation + ': ' + dropoffLocation + '\n';
            }

            $("#pick-up-date-ph").html(pickUpDate);
            $("#pick-up-time-ph").html(pickUpTime);
            data = data + Pickup + ': ' + pickUpDate + ' at ' + pickUpTime + '\n';

            $("#drop-off-date-ph").html(dropOffDate);
            $("#drop-off-time-ph").html(dropOffTime);
            data = data + DropOff + ': ' + dropOffDate + ' at ' + dropOffTime + '\n';

            $('#checkoutModal').modal();
            $('.reserve_info textarea, textarea.reserve_info').html(data);
        } else
        {
            $('#car-select-form-msg').css('visibility', 'visible').hide().fadeIn().removeClass('hidden').delay(2000).fadeOut();
        }

        return false;
    });



// Check Out Form
//-------------------------------------------------------------------------------

    $("#checkout-form .inline-footer-btn").parents('.row').addClass('footer_row');
    $("#checkout-form .inline-footer-btn.btn-gray").parent().addClass('btn-wrpr btn-gray');
    $("#checkout-form .inline-footer-btn.btn-yellow").parent().addClass('btn-wrpr btn-yellow');
    $("#checkout-form .inline-footer-btn.btn-gray").on('click',function () {
        $('#checkoutModal').modal('hide');
    });



// Not Empty Validator Function
//-------------------------------------------------------------------------------

    function validateNotEmpty(data) {
        if (data == '') {
            return true;
        } else {
            return false;
        }
    }



});

//wow

new WOW({mobile: false}).init();


/* ------------------------------------------------=
 ---=  Slider for WP                ------
 ---------------------------------------------------= */

jQuery('.carousel-inner').find('.item:first').addClass('active');
jQuery('.xs-indicator').find('li:first').addClass('active');



//var formSelector = ;

fwForm.initAjaxSubmit({
    //selector: 'form[some-custom-attribute].or-some-class'
    selector: 'form[data-fw-form-id="fw_form"]',
    ajaxUrl: adminAjax
});



jQuery(document).ready(function ($) {
    var lists = $('.vehicle-tab-nav li');

    if (lists.length <= 6) {
        $('.vehicle-scroll').hide();
    }
    var windowWidth = $(window).width();
    if (windowWidth < 990) {
//        jQuery('.navbar-collapse a').click(function (e) {
//            jQuery('.navbar-collapse').collapse('toggle');
        jQuery('.vehicle-scroll').hide();
//        });


    }
    var windowWidth = $(window).width();

//    if (windowWidth < 767) {
//        jQuery('.menu-item-has-children a').replace(,'</a><a href="#" class="dropdownxs" data-toggle="dropdown" aria-haspopup="true"><span class="caret"></span></a>')
//    }


});

