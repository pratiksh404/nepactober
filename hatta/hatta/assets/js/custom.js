/*========================================================
    Written: 	   By Pawon Gurung
    Work Station:  Tech Coderz
    Website: 	   Akshit Beach and Resort 
================================================================*/
jQuery(document).ready(function($) {
    navbar();
    stickyHeader();
    datePick();
    showBookForm();
    // roomSlider();
    /*=======================
    navbar Js
    =========================*/

    function navbar() {
        $('.site-header .primary-navigation .toggle-btn').click(function() {
            $('body').addClass('openNav');
        });
        $('.site-header .main-navigation .close-btn').click(function() {
            $('body').removeClass('openNav');
        });
    }
    /*=======================
    Sticky Header
    =========================*/
    function stickyHeader() {
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 450) {
                $('.site-header').addClass('nav-fixed');
            } else {
                $('.site-header').removeClass('nav-fixed');
            }

            if (scroll >= 450) {
                $('.site-wrapper').addClass('for-sticky');
            } else {
                $('.site-wrapper').removeClass('for-sticky');
            }

            if (scroll >= 450) {
                $('.banner-checking').addClass('hide-check');
            } else {
                $('.banner-checking').removeClass('hide-check');
            }

        });
    }

    /* ================================
        For Form
    ===============================*/
    function showBookForm() {
        $('.sticky-booking').click(function() {
            $('.sticky-book-form .check-avail-form').addClass('show-form');
            $('body').addClass('added-overlay');
        });
        $('.overlay').click(function() {
            $('.sticky-book-form .check-avail-form').removeClass('show-form');
            $('body').removeClass('added-overlay');
        });
    }
    /*=======================
        Date Picker
    =========================*/
    function datePick() {
        $('.date-pick').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            opens: 'right',
            drops: 'up',
        })
    }

    /* =======================
        Show Slider
    ===========================*/
    $('.owl-carousel').owlCarousel({
        loop: false,
        nav: true,
        margin: 10,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
});
new Glide(".show-case-section .glide", {
    type: "carousel",
    startAt: 0,
    animationTimingFunc: "ease-in-out",
    gap: 80,
    perView: 2,
    breakpoints: {
        1024: {
            gap: 40,
        },
        768: {
            gap: 30,
        },
        600: {
            gap: 30,
            autoplay: 1000,
        },
        500: {
            gap: 10,
        },
    }

}).mount();

new Glide(".show-two-section .glide", {
    type: "carousel",
    startAt: 0,
    animationTimingFunc: "ease-in-out",
    gap: 60,
    perView: 2,
    breakpoints: {
        1024: {
            gap: 40,
        },
        768: {
            gap: 30,
        },
        600: {
            gap: 30,
            autoplay: 1000,
        },
        500: {
            gap: 10,
        },
    }
}).mount();

