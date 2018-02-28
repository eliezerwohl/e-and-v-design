$(document).ready(function() {
  var navbar = $(".navbar-default");
  var navbarLink = $(".navbar-nav li a");
  // var num1 = 73;
  // var num2 = 61;
  // var num3 = 61;
  function multi(currentPos) {
    return (248 - (21 * currentPos)) + ", " + (248 - (17 * currentPos)) + ", " + (248 - (19 * currentPos));
  }
  function scrollFunction() {
    var scrollPosition = $(this).scrollTop();
    var mathNum = Math.floor(scrollPosition / 3);
    if (scrollPosition == 0) {
      $('.navbar-default').removeClass("scrollNav").addClass("topNav");
      $(".navbar-brand").removeClass("brandShow").addClass("brandHide");
      $(navbar).css("background-color", "rgba(255,255,255,0.0")
      $(navbarLink).css("color", "rgb(248, 248, 248)")
    } else {
      $('.navbar-default').removeClass("topNav").addClass("scrollNav");
      $(".navbar-brand").removeClass("brandHide").addClass("brandShow");
      if (mathNum < 10) {
        mathNum = 1;
      } else if (mathNum > 70) {
        mathNum = 7;
      }
      var numin = "0." + parseInt(mathNum.toString()[0]);
      $(navbar).css("background-color", "rgba(255,255,255," + numin + ")")
      if (mathNum == 7) {
        $(navbarLink).css("color", "rgb(152, 128, 136)")
      } else {
        $(navbarLink).css("color", "rgb(" + multi(mathNum.toString()[0]) + ")")
      }
    }
  }
  scrollFunction();
  $(document).scroll(function() {
    scrollFunction()
  });

});
