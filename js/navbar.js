$( document ).ready(function() {
  scrollFunction();
  var navbar = $(".navbar-default");
  $(document).scroll(function(){
    scrollFunction()
	});
  function scrollFunction(){
    var scrollin = $(this).scrollTop();
    var mathin = Math.floor(scrollin / 4);
    if (scrollin == 0){
      $('.navbar-default').removeClass("scrollNav").addClass("topNav");
      $(".navbar-brand").removeClass("brandShow").addClass("brandHide");
      $(navbar).css("background-color", "rgba(255,255,255,0.0")
    }
    else {
      $('.navbar-default').removeClass("topNav").addClass("scrollNav");
      $(".navbar-brand").removeClass("brandHide").addClass("brandShow");
      if (mathin < 10) {
        mathin = 1;
      }
      else if (mathin > 70){
        mathin = 7;
      }
      var numin = "0." + parseInt(mathin.toString()[0]);
      $(navbar).css("background-color", "rgba(255,255,255," + numin + ")")
    }
  }
});
