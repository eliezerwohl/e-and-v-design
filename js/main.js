var menuVar;
var current;

function scrollFunction(){
  if($(this).scrollTop() > 0){   
      $('.navbar-default').removeClass("topNav").addClass("scrollNav");   
      $(".navbar-brand").removeClass("brandHide").addClass("brandShow");
     } 
  else { 
    $('.navbar-default').removeClass("scrollNav").addClass("topNav");
    $(".navbar-brand").removeClass("brandShow").addClass("brandHide");
    $(".nav").find(".active").removeClass("active");
  }
}
function menusScroll (data){
	var id = data.id
	//if scrolled at bottom
	//document.body.scrollTop is an IE fix
	if ((window.innerHeight + (document.documentElement.scrollTop || document.body.scrollTop)) >= document.body.offsetHeight - 70) {
 		id = "contact"
  }

if (((document.documentElement.scrollTop||document.body.scrollTop) >= data.offsetTop - 70)
	&& ((document.documentElement.scrollTop||document.body.scrollTop) <=  data.offsetTop + data.clientHeight - 70)){
	if (current != id) {
	  $(".nav").find(".active").removeClass("active");
			current = id;
    	$("#" + id + "Button").parent().addClass("active");
		}
	}
}

$(".navbar-toggle, .nav  .navbar-collapse a").on("click", function(e) {
	$("#bs-example-navbar-collapse-1").slideToggle("fast");
});
$(".navbar-brand").on("click", function() {
  $("#bs-example-navbar-collapse-1").slideUp("fast");
});
$( document ).ready(function() {
  scrollFunction()
	var aboutUs = document.getElementById("aboutUs");
	var portfolio = document.getElementById("portfolio");
	var home = document.getElementById("home");
	var contact = document.getElementById("contact");
	var array = [aboutUs, portfolio, home, contact];
	function menusScrollLoop() {
		for (var i = 0; i < array.length; i++) {
  		menusScroll(array[i])
	  }
	}
	menusScrollLoop()
  $(document).scroll(function(){
  	menusScrollLoop()
    scrollFunction()
	});
  $('a[href*="#"]:not([href="#"])').click(function() {
  	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  if (target.length) {
		    $('html, body').animate({
		      scrollTop: target.offset().top - 50
		    }, 1000);
		    return false;
		  }
		}
	});
}); 