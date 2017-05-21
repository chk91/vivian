console.log("hello");

(function( $ ) {
    
    // navigation functions
    $( '#show-nav' ).on('click',function( event ){
        event.preventDefault();
        $( '.site-header' ).addClass( 'header-resize' );
        $( '.menu-toggle' ).hide();
        var height = $(window).height(); 
        $('.header-resize .main-navigation .menu').css('max-height', height-200);
    });

    $( '.nav-cancel' ).on( 'click', function( event ){
        event.preventDefault();
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $(window).resize(function(){
        $( '.site-header' ).removeClass( 'header-resize' );
    });

    $( '.acf-input-wrap input' ).prop( 'disabled', true );

$("#ihf-minprice-homes").attr("placeholder", "Min price").val("").focus().blur();
$("#ihf-maxprice-homes").attr("placeholder", "Max price").val("").focus().blur();

$('.ihf-grid-result-basic-info-item1').prepend('<div class="bedicon"></div>')
$('.ihf-grid-result-basic-info-item2').prepend('<div class="bathicon"></div>')
$('.ihf-grid-result-basic-info-item3').prepend('<div class="sqft"></div>')




})(jQuery);