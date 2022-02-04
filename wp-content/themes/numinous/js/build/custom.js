jQuery(document).ready(function ($) {
    var rtl, nrtl, slider_auto, slider_loop, slider_control;
    if (numinous_data.rtl == '1') {
        rtl = true;
        nrtl = 'rtl';
    } else {
        rtl = false;
        nrtl = 'ltr';
    }
    /** Breaking News Ticker */
    $('#news-ticker').ticker({
        controls: false,        // Whether or not to show the jQuery News Ticker controls
        titleText: '',
        direction: nrtl,
    });

    /** Search Form */
    $('html').click(function () {
        $('.example').hide();
    });

    $('.form-section').click(function (event) {
        event.stopPropagation();
    });

    $("#search-btn").click(function () {
        $(".example").slideToggle();
        return false;
    });


    //form-section

    $('#search-btn').click(function () {
        $('.form-section .form-holder').slideToggle();
        return false;
    });

    $('.form-section .form-holder').click(function (event) {
        event.stopPropagation();
    });

    $('html').click(function () {
        $('.form-section .form-holder').slideUp();
    });

    //closebutton
    $(".btn-form-close").click(function () {
        $(".form-section .form-holder").slideToggle();
        return false;
    });


    /** Footer Slider */
    /** Variables from Customizer for Slider settings */
    if (numinous_data.auto == '1') {
        slider_auto = true;
    } else {
        slider_auto = false;
    }

    if (numinous_data.loop == '1') {
        slider_loop = true;
    } else {
        slider_loop = false;
    }

    if (numinous_data.control == '1') {
        slider_control = true;
    } else {
        slider_control = false;
    }

    if (numinous_data.rtl == '1') {
        rtl = true;
    } else {
        rtl = false;
    }

    $("#lightSlider").owlCarousel({
        items: 4,
        margin: 0,
        autoplay: false, //slider_auto,
        loop: slider_loop,
        mouseDrag: false,
        nav: slider_control,
        rtl: rtl,
        responsive: {
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            481: {
                items: 3,
            },
            // breakpoint from 768 up
            801: {
                items: 4,
            }
        }
    });

    $('.newsticker-wrapper').fadeIn('slow');

    // Mobile-menu
    var winWidth = $(window).width();
    if (winWidth < 1025) {
        // $('.main-navigation').prepend('<div class="btn-close-menu"></div>');

        // $('.main-navigation ul .menu-item-has-children').append('<button class="angle-down"></button>');

        // $('.main-navigation ul li .angle-down').click(function(){
        //     $(this).toggleClass('active');
        //     $(this).prev().slideToggle();
        // });

        $('#mobile-header').click(function () {
            $('body').addClass('menu-open');
            $('.mobile-menu-wrapper .primary-menu-list').addClass('toggled');

            $('.mobile-menu-wrapper .close.close-main-nav-toggle').click(function () {
                $('body').removeClass('menu-open');
                $('.mobile-menu-wrapper .primary-menu-list').removeClass('toggled');
            });
        });

        $('.overlay').click(function () {
            $('body').removeClass('menu-open');
            $('.mobile-menu-wrapper .primary-menu-list').removeClass('toggled');
        });

    }
    //for accessibility
    $('<button class="angle-down"></button>').insertAfter($('#mobile-site-navigation ul .menu-item-has-children > a'));
    $('#mobile-site-navigation ul li .angle-down').click(function () {
        $(this).next().slideToggle();
        $(this).toggleClass('active');
    });

    $('#mobile-header').click(function () {
        $('body').addClass('menu-open');
        $('.mobile-menu-wrapper .primary-menu-list').addClass('toggled');

        $('.mobile-menu-wrapper .close.close-main-nav-toggle').click(function () {
            $('body').removeClass('menu-open');
            $('.mobile-menu-wrapper .primary-menu-list').removeClass('toggled');
        });
    });

    $(window).on("load, resize", function() {
        var viewportWidth = $(window).width();
        if (viewportWidth < 1025) {
            $('.overlay').click(function() {
                $('body').removeClass('menu-open');
           $('.mobile-menu-wrapper .primary-menu-list').removeClass('toggled'); 
            });
        }
        else if (viewportWidth> 1025) {
            $('body').removeClass('menu-open');
        }
    });

    if (winWidth > 1024) {
        //accessible menu in IE
        $("#site-navigation ul li a").focus(function () {
            $(this).parents("li").addClass("focus");
        }).blur(function () {
            $(this).parents("li").removeClass("focus");
        });
    }
});

