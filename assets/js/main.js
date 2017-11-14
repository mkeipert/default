/* PAGE:BEFORE */

var large = window.matchMedia( "screen and (min-width: 1024px)" );
var medium = window.matchMedia( "screen and (min-width: 768px" );

if (large.matches) {
	$(document).ready(function(){
		var logoPos = $('#logo').offset().left;
		var leftBorder = logoPos + 90;
		var barWidth = $('#page').width() - leftBorder;
		$('#bar').css('width',barWidth);
	})
}

/* Equalize Teaser Height */

if (large.matches) {
	var highest_element = 0;
	$('.equalize').each(function() {
  		if ($(this).height() > highest_element) {
    	highest_element = $(this).height();
  		}
	});
	$('.equalize').each(function() {
  		$(this).height(highest_element);
	});
}

/* Mobile Menu */

var nav = document.querySelector( "#header_nav" ),
navToggle = document.querySelector( "#navwrap .skip" );
if ( navToggle ) {
	navToggle.addEventListener( "click", function( e ) {
		if ( nav.className == "open" ) {
			nav.className = "";
			$(".skip button").removeClass("close");
		} else {
			nav.className = "open";
			$(".skip button").addClass("close");

		}
		e.preventDefault();
	}, false );
}

/* From Bottom To Top */

$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});



/* Sticky Header */


if (medium.matches) {

	$(window).scroll(function() {
	if ($(this).scrollTop() > 1){  
	    $('#header').addClass("sticky");
	  }
	  else{
	    $('#header').removeClass("sticky");
	  }
	});

}


/* Cookie Bar */

$(document).ready(function() {
	 $('.cookie-message').cookieBar({ closeButton : '.cookie-close' });
});



