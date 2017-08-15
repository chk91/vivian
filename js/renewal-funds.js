console.log("hello");

(function( $ ) {
    
    // navigation functions
    $('.main-nav').on('click', function() {
        console.log("hello");
        $('.main-navigation').slideToggle();
    })
    

    $( '.acf-input-wrap input' ).prop( 'disabled', true );

// $("#ihf-minprice-homes").attr("placeholder", "Min price").val("").focus().blur();
// $("#ihf-maxprice-homes").attr("placeholder", "Max price").val("").focus().blur();

$('.ihf-grid-result-basic-info-item1').prepend('<div class="bedicon"></div>')
$('.ihf-grid-result-basic-info-item2').prepend('<div class="bathicon"></div>')
$('.ihf-grid-result-basic-info-item3').prepend('<div class="sqft"></div>')

// $('.mob-menu-logo-holder').find('img').attr('src', '/assets/icons/gray-quot.png')

console.log("am i working?");


})(jQuery);

console.log("am i working?");