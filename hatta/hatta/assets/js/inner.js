$(document).ready(function($) {
    $('.owl-section .owl-carousel').owlCarousel({
        loop: false,
        margin: 0,
        responsiveClass: true,
        items: 3,
        autoplay: false,
        autoplayTimeout: 5000,
        dots:true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    });  
})
