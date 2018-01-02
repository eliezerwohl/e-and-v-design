function scrollFunction(){
  if($(this).scrollTop() > 0){   
      $('.navbar-default').removeClass("topNav").addClass("scrollNav");   
      $(".navbar-brand").removeClass("brandHide").addClass("brandShow");
     } 
  else { 
    $('.navbar-default').removeClass("scrollNav").addClass("topNav");
    $(".navbar-brand").removeClass("brandShow").addClass("brandHide");
  }
}

$( document ).ready(function() {
  scrollFunction();
  $(document).scroll(function(){
    scrollFunction()
	});
}); 