
$(document).ready(function(){

//$(get_loginform).hide();
//$(get_signupform).hide();
	$("#signupform" ).removeClass("signup");
	$("#signupform" ).addClass("signup_clicked");

});

/*
$(document).ready(function(){
		$("#login_form").click(function(){
		$("#get_signupform").fadeOut();
		
		$("#get_loginform").fadeIn(1000);
		$("#login_form" ).removeClass("login");
		$("#login_form" ).addClass("login_clicked");
		$("#signupform" ).removeClass("signup_clicked");
		$("#signupform" ).addClass("signup");

});
});*/

$(document).ready(function(){
		$("#signupform").click(function(){
		$("#get_loginform").fadeOut(1000);
		
		$("#get_signupform").fadeIn(1000);
		$("#login_form" ).removeClass("login_clicked");
		$("#login_form" ).addClass("login");
		$("#signupform" ).removeClass("signup");
		$("#signupform" ).addClass("signup_clicked");

});
});
