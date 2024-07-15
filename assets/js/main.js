(function ($) {
    "use strict";
    AOS.init();
    /* -----------------------------------
            Preloader 
    ----------------------------------- */
    
    $('.loading').delay(500).fadeOut(1500);

    /* -----------------------------------
        Swiper slider
    ----------------------------------- */

    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    });
    
    /* -----------------------------------
            Owl Carousel
    ----------------------------------- */
    $('.rs-carousel').owlCarousel({
        loop:true,
        margin:25,
        dots:false,
        autoplay: 3000,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        smartSpeed:450,
        responsiveClass:true,
        navText:['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            767:{
                items:2,
                nav:true
            },
            940: {
                items:2,
                nav:true
            },
            1199:{
                items:3,
                nav:true,
                loop:true
            }
        }
    });

    /* -----------------------------------
            Fancybox gallery 
    ----------------------------------- */

    Fancybox.bind('[data-fancybox="gallery"]', {
        Thumbs : {
          type: "modern"
        }
      });
   
    /* -----------------------------------
            Slick Slider 
    ----------------------------------- */
    $('.slider').slick({
        autoplay:true,
        autoplaySpeed:3000,
        arrows:true,
        vertical: true,
        prevArrow: '<div class="slick-prev"></div>',
        nextArrow: '<div class="slick-next"></div>',
        slidesToShow:3,
        slidesToScroll:1
        });

    /* -----------------------------------
           Back-top
    ----------------------------------- */
    $('.back-top').hide();
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 250) {
            $('.back-top').fadeIn(300);
        } else {
            $('.back-top').fadeOut(300);
        }
    });

    $('.back-top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 300);
        return false;
    });


    /* -----------------------------------
           Gallery Slider
    ----------------------------------- */

      $('.gallery-slider').slick({
        autoplay:true,
        autoplaySpeed:3000,
        arrows:true,
        prevArrow: '<div class="slick-prev"></div>',
        nextArrow: '<div class="slick-next"></div>'
      });
      
      
      /* -----------------------------------
           Masonry Items
        ----------------------------------- */

      $(window).on("load resize", function () {
        $(".masonry-items").masonry({
            itemSelector: ".masonry-item",
            columnWidth: ".masonry-item",
        });
    });
    

})(jQuery);