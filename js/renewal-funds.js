console.log("hello");

(function( $ ) {
    
    // navigation functions
    $('.main-nav').on('click', function() {
        $('.main-navigation').slideToggle();
    })
    

    $( '.acf-input-wrap input' ).prop( 'disabled', true );

$('.ihf-grid-result-basic-info-item1').prepend('<div class="bedicon"></div>')
$('.ihf-grid-result-basic-info-item2').prepend('<div class="bathicon"></div>')
$('.ihf-grid-result-basic-info-item3').prepend('<div class="sqft"></div>')

// $('.mob-menu-logo-holder').find('img').attr('src', '/assets/icons/gray-quot.png')

console.log("am i working?");

$(document).ready(function(){
  $(window).bind('scroll', function() {
    var distance = 50;
    if ($(window).scrollTop() > distance) {
      $('.header-bar').addClass('scrolled');
    }
    else {
      $('.header-bar').removeClass('scrolled');
    }
  });
});

$(document).ready(function(){
  $(window).bind('scroll', function() {
    var distance = 50;
    if ($(window).scrollTop() > distance) {
      $('.menu').addClass('menu-scrolled');
    }
    else {
      $('.menu').removeClass('menu-scrolled');
    }
  });
});

$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".header-logo-front").addClass("header-logo-scrolled");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".header-logo-front").removeClass("header-logo-scrolled");
    }
});

$(document).ready(function(){
  $(window).bind('scroll', function() {
    var distance = 50;
    if ($(window).scrollTop() > distance) {
      $('main-navigation').addClass('main-navigation-scrolled');
    }
    else {
      $('main-navigation').removeClass('main-navigation-scrolled');
    }
  });
});

$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".hamburger-front").addClass("hamburger-front-scrolled");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".hamburger-front").removeClass("hamburger-front-scrolled");
    }
});

})(jQuery);

console.log("am i working?");

