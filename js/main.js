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
	ajaxCall();
  scrollFunction();
  $(document).scroll(function(){
    scrollFunction()
	});
}); 

function ajaxCall(){

$("#submit").click(function(e){
	e.preventDefault()
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&message='+ message;
$(".message").empty();
if(name==''||email==''||message=='')
{

$(".message").append("<span class='warning'>Please fill all fields</span>");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "form.php",
data: dataString,
cache: false,
success: function(result){
	$("#name").val("");
$("#email").val("");
$("#message").val("");
$(".message").append("<span class='success'>Thank you for contacting us, we will be in touch soon</span>");
}
});
}
return false;
});

}