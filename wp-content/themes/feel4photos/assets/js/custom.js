// swiper slider
var swiper = new Swiper('.swiper1', {
    zoom: true,
    pagination: '.swiper-pagination1',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
});
var swiper2 = new Swiper('.swiper2', {
    //zoom: true,
    pagination: '.swiper-pagination2',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
    slidesPerView: 2,
});
var swiper3 = new Swiper('.swiper3', {
    zoom: true,
    pagination: '.swiper-pagination3',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
});
var swiper4 = new Swiper('.swiper4', {
    zoom: true,
    pagination: '.swiper-pagination4',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
});
var swiper5 = new Swiper('.swiper5', {
    zoom: true,
    pagination: '.swiper-pagination5',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    paginationClickable: true,
    slidesPerView: 'auto',
    spaceBetween: 15,
    //Enable Scrollbar
    scrollbar: '.swiper-scrollbar',
    hide: false,
    draggable: true,
    snapOnRelease: true,
    mousewheel: true,
    breakpoints: {
    768: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
    640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
    320: {
            slidesPerView: 1,
            spaceBetween: 10,
        }
    }
});

// click to scroll down
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});

// scroll to top
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn(1000);
        }else{
            $('#scroll').fadeOut(1000);
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });
});


// page preloader
$(document).ready(function(){
   /***** Element 1 *****/
        // Initialize Progress and show LoadingOverlay
        var progress1 = new LoadingOverlayProgress();
        $(".o-whole").LoadingOverlay("show", {
            custom  : progress1.Init()
        });
        // Simulate some action:
        var count1  = 0;
        var iid1    = setInterval(function(){
            if (count1 >= 100) {
                clearInterval(iid1);
                delete progress1;
                $(".o-whole").LoadingOverlay("hide");
                return;
            }
            count1++;
            progress1.Update(count1);
        }, 100);
    /*********************/
});


// site preloader
jQuery(document).ready(function(){
    jQuery("#os-phrases > h2").lettering('words').children("span").lettering().children("span").lettering();
});

// site preloader fade out
jQuery(document).ready(function() { // makes sure the whole site is loaded
    jQuery('.o-site-preloader').css('opacity', '1').delay(11000).fadeOut(2000); // will first fade out the loading animation
    jQuery('body').delay(3500).css({'overflow':'visible'});
});


// menu overlay
(function($) {
    $(function() {
    $('.toggle-overlay').click(function() {
        $('.o-mainnav-list').toggleClass('open');
        });
    });
})(jQuery);

// search box overlay
(function($) {
    $(function() {
    $('.search-overlay').click(function() {
        $('.o-search-box').toggleClass('open');
        });
    });
})(jQuery);


jQuery(window).load(function() {
  equalheight('.c-equalhght');
});


jQuery(window).resize(function(){
  equalheight('.c-equalhght');
});


(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $(".c-slider").slick({
        dots: true,
        dotsClass: 'slick-dots',
        autoplay: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        mobileFirst: true,
        focusOnSelect: true
        //adaptiveHeight: true
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space


// swipe box
(function($) {
    $('.swipebox').swipebox();
})(jQuery);


// headroom
// grab an element
var myElement = document.querySelector("section.o-brand");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement, {
    "offset": 10,
    "tolerance": 10
});
// initialise
headroom.init();


// wow animation
wow = new WOW(
    {
        animateClass: 'animated',
        mobile:       true,
        live:         true,
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    }
);
wow.init();





