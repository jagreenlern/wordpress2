jQuery(document).ready(function($){    
    
    var rtl;

    if ( vandana_health_coach_data.rtl == '1' ) {
        rtl = true;
    } else {
        rtl = false;
    }

    $('.site-header.style-two .header-mid .toggle-btn').click(function() {
        $('.site-header.style-two .header-mid .menu-wrap').animate({
            width: 'toggle',
        });
    });

    $('.site-header.style-two .header-mid .menu-wrap .close').click(function () {
        $('.site-header.style-two .header-mid .menu-wrap').animate({
            width: 'toggle',
        });
    });

    $(window).keyup(function(e) {
        if(e.key == 'Escape') {
            $('.site-header.style-two .header-mid .menu-wrap').fadeOut();
        }
    });

    //init perfect scrollbar in secondary menu
    const ps = new PerfectScrollbar('.site-header.style-two .header-mid .secondary-menu .nav-menu', {
        wheelSpeed: 0.2,
    });

    //Testimonial section
    if($(".testimonial-section").hasClass("style-three")) {
        $('.testimonial-section .testimonial-wrap').owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            autoplaySpeed: 700,
            autoplay: false,
            rtl: rtl,
        });
    }

});