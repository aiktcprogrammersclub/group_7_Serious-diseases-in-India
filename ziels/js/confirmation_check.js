
$(document).ready(function(){

//$(get_loginform).hide();
//$(get_signupform).hide();
		$("#signupform" ).removeClass("signup");
	$("#signupform" ).addClass("signup_clicked");

});

	function endconfirmation()
{
		
		var r=confirm("Are you sure you want to leave this confirmation procedure and get back to login page");
		
		if(r==true)
		{
		window.location.href='../index.php';
		}
}

function confirm_warning()
{
alert("Please Complete the Confirmation Procedure first");
}