'use strict';

$( document ).ready(function() {
  //preloader
  $(".preloader").delay(300).animate({
    "opacity" : "0"
    }, 300, function() {
    $(".preloader").css("display","none");
  });

  $('.custom-field').each(function(i, v){
    if(v.value !=''){
      $(this).addClass('hascontent');      
    }else{
      $(this).removeClass('hascontent');
    }
  });

  $('.custom-field').on('keydown', function(){
    var inputField = $(this).val();
    if(inputField !=''){
      $(this).addClass('hascontent');      
    }else{
      $(this).removeClass('hascontent');
    }
  });
});

// menu options custom affix
var fixed_top = $(".scroll-menu");
$(window).on("scroll", function(){
    if( $(window).scrollTop() > 600){  
        fixed_top.addClass("animated fadeInDown menu-fixed");
    }
    else{
        fixed_top.removeClass("animated fadeInDown menu-fixed");
    }
});

var lastScrollTop = '';
$(window).on('scroll', function () {
   var ScrollTop = $('.scroll-to-top');
   if ($(window).scrollTop() > 500) {
       ScrollTop.fadeIn(500);
   } else {
       ScrollTop.fadeOut(500);
   }
   /*--------------------------
    sticky menu activation
   -------------------------*/
    var st = $(this).scrollTop();
    var mainMenuTop = $('.header');
    if ($(window).scrollTop() > 500) {
        if (st > lastScrollTop) {
            mainMenuTop.removeClass('animated fadeInDown menu-fixed');
            
        } else {
            mainMenuTop.addClass('animated fadeInDown menu-fixed');
        }
    } else {
        mainMenuTop.removeClass('animated fadeInDown menu-fixed');
    }
    lastScrollTop = st;
});

// mobile menu js
$(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function() {
  const element = $(this).parent("li");
  if (element.hasClass("open")) {
    element.removeClass("open");
    element.find("li").removeClass("open");
  }
  else {
    element.addClass("open");
    element.siblings("li").removeClass("open");
    element.siblings("li").find("li").removeClass("open");
  }
});

$('.header__search-btn').on('click', function(){
  $(this).toggleClass('active');
  $('.header-search-form').toggleClass('active');
});

$(document).on('click touchstart', function (e){
  if (!$(e.target).is('.header__search-btn, .header__search-btn *, .header-search-form, .header-search-form *')) {
    $('.header-search-form').removeClass('active');
    $('.header__search-btn').removeClass('active');
  }
});

$('.menu-sidebar-close').on('click', function(){
  $('.navbar-collapse').removeClass('show');
  $('.navbar-toggler').attr('aria-expanded', 'false');
});

$('.user-menu-open').on('click', function(){
  $('.user-menu-wrapper').addClass('active');
});
$('.user-menu-close').on('click', function(){
  $('.user-menu-wrapper').removeClass('active');
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});

// Animate the scroll to top
$(".scroll-to-top").on("click", function(event) {
	event.preventDefault();
	$("html, body").animate({scrollTop: 0}, 300);
});

new WOW().init();

// lightcase plugin init
$('a[data-rel^=lightcase]').lightcase();

// choose list animation
var nodes = document.querySelectorAll('.choose-us-list li');
  var curIndex = 0;
  setInterval(function() {
      var element = nodes[curIndex];
      $('.choose-us-list li').removeClass('active');
      $(element).addClass('active');
      if (curIndex == 5) {
          curIndex = 0;
      } else {
          curIndex++;
      }
  }, 1000);

// sidebar js 
$('.res-filter-btn').on('click', function(){
  $('.product-sidebar').addClass('active');
});
$('.product-sidebar-close').on('click', function(){
  $('.product-sidebar').removeClass('active');
});

// testimonial slider 
$('.testimonial-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  autoplay: true,
  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
  speed: 1000,
  autoplaySpeed: 1000,
});


// brand slider js 
$('.brand-slider').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  autoplay: true,
  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
  speed: 1000,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    }
  ]
});

// hero content-slider
$('.hero__content-slider').slick({
  dots: false,
  arrows: false,
  autoplay: true,
  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
  speed: 2000,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

// featured_items
$('.featured-items').slick({
  dots: false,
  arrows: false,
  autoplay: true,
  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
  speed: 2000,
  autoplaySpeed: 5000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

// involde-logo-slider 
$('.involde-logo-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  autoplay: true,
  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
  speed: 1000,
  autoplaySpeed: 1000,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2
      }
    }
  ]
});