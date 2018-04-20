$( document ).ready(function() {
  var offsetVar;
  if ($(window).width() < 767) {
   offsetVar = 20;
  }
  else {
   offsetVar = 60;
  }

	if(window.location.hash) {
    console.log(offsetVar)
		var target = $(window.location.hash);
		$('html, body').animate({
	  	scrollTop: target.offset().top - offsetVar
		}, 1000);
	} 
})