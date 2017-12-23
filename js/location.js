$( document ).ready(function() {
	if(window.location.hash) {
		var target = $(window.location.hash);
		$('html, body').animate({
	  	scrollTop: target.offset().top - 80
		}, 1000);
	} 
})