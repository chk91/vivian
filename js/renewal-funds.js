console.log("hello");

(function($) {
	
    $("#show-nav").on("click", function() {
        console.log("hope");
    $( ".main-nav").toggle("slow");
  })
	
})( jQuery );