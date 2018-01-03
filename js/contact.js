$( document ).ready(function() {
	ajaxCall();
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
url: "/form",
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