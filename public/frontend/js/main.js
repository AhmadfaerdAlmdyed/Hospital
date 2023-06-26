/*global $, jQuery, console, alert, prompt */
$(window).on('load', function () {
    "use strict";
    $(".se-pre-con,.pre-loader").delay(500).fadeOut("slow");
    new WOW().init(
        {
            mobile: false,
            live: true
        });
    $('#openMenu').click(function (e) {
        e.preventDefault();
        $('.side-menu').css("right", 0).css("opacity", 1);
        $('.side-overlay').fadeIn();
        $('body, html').css("overflow-y", "hidden");
        $('.side-overlay, #closeMenu').click(function () {
            $('.side-menu').css("right", "-900px").css("opacity", 0);
            $('.side-overlay').fadeOut();
            $('body, html').css("overflow-y", "auto");
        });
    });
   
    $('.hospital-details-slider').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: [`<span>
        <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
        <path id="Path_42242" data-name="Path 42242" d="M2115,70l4.061,4.061L2115,78.121" transform="translate(-2113.94 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
      </svg>
      
          </span>`, `
          <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
          <path id="Path_42242" data-name="Path 42242" d="M2119.061,70,2115,74.061l4.061,4.061" transform="translate(-2114.25 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
        </svg>
        
          </span>
        `],
        dots: true,
        autoplay: false,
        autoplaySpeed: 1500,
        margin: 24,
    });
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('banner-img'), // Required
        path: "assets/images/Header Illustration.json", // Required
        renderer: 'svg', // Required
        loop: true, // Optional
        autoplay: true, // Optional
        name: "Banner", // Name for future reference. Optional.
    });
    $('.specialists-slider').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: [`<span>
        <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
        <path id="Path_42242" data-name="Path 42242" d="M2115,70l4.061,4.061L2115,78.121" transform="translate(-2113.94 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
      </svg>
      
          </span>`, `
          <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
          <path id="Path_42242" data-name="Path 42242" d="M2119.061,70,2115,74.061l4.061,4.061" transform="translate(-2114.25 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
        </svg>
        
          </span>
        `],
        dots: false,
        autoplay: false,
        autoplaySpeed: 1500,
        margin: 12,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });
    $('.rates-slider').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: false,
        navText: [`<span>
        <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
        <path id="Path_42242" data-name="Path 42242" d="M2115,70l4.061,4.061L2115,78.121" transform="translate(-2113.94 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
      </svg>
      
          </span>`, `
          <span>
          <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
          <path id="Path_42242" data-name="Path 42242" d="M2119.061,70,2115,74.061l4.061,4.061" transform="translate(-2114.25 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
        </svg>
        
          </span>
        `],
        dots: true,
        autoplay: false,
        autoplaySpeed: 1500,
        margin: 12,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });

    $('.login-slider').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: false,
        navText: [`<span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
                    <path id="Path_42242" data-name="Path 42242" d="M2115,70l4.061,4.061L2115,78.121" transform="translate(-2113.94 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                </svg>
          </span>`, `
          <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
                <path id="Path_42242" data-name="Path 42242" d="M2119.061,70,2115,74.061l4.061,4.061" transform="translate(-2114.25 -68.939)" fill="none" stroke="#171725" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                </svg>
          </span>
        `],
        dots: true,
        autoplay: false,
        autoplaySpeed: 1500,
        margin: 12,
    });
    if (innerWidth <= 992) {
        $('.openProfile').on('click',function(e){
            e.preventDefault();
            $('.profile-sidebar').css("right", 0).css("opacity", 1);
            $('.side-overlay').fadeIn();
            $('body, html').css("overflow-y", "hidden");
            $('.side-overlay').click(function () {
                $('.profile-sidebar').css("right", "-900px").css("opacity", 0);
                $('.side-overlay').fadeOut();
                $('body, html').css("overflow-y", "auto");
            });
        });
        
    }
});

