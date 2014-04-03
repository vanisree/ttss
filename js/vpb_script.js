//This function is called automatically upon page load
$(document).ready(function() 
{	
	$("#vpb_pop_up_background").click(function()
	{
		$("#vpb_signup_pop_up_box").hide(); //Hides the sign-up box when clicked outside the form
		$("#vpb_login_pop_up_box").hide(); //Hides the login box when clicked outside the form
		$("#vpb_inlude_box").hide();
		$("#vpb_exclude_box").hide();
		$("#vpb_pop_up_background").fadeOut("slow");
	});
});

//This function displays the sign-up box when called
function vpb_show_sign_up_box()
{
	$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_signup_pop_up_box").fadeIn('fast');
	clear_fields();
	window.scroll(0,0);
}

function vpb_show_include_box(){
$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_inlude_box").fadeIn("fast");
	$(".inclu_options").removeAttr('disabled');
	var checked = [];
	$("input[name='exclu_options']:checked").each(function ()
	{
       checked.push($(this).val());
	});   
	for(var i=0;i<checked.length;i++){
	    var split=checked[i].split("_");
		//alert(split[1]+""+document.getElementById("exclu_html"));
		document.getElementById("inclu_"+split[1]).disabled=true;
	}
//alert("Hi");                             
}

function vpb_show_exclude_box(){
$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_exclude_box").fadeIn("fast");
	$(".exclu_options").removeAttr('disabled');
	var checked = [];
	$("input[name='inclu_options']:checked").each(function ()
	{
       checked.push($(this).val());
	});   
	for(var i=0;i<checked.length;i++){
	    var split=checked[i].split("_");
		//alert(split[1]+""+document.getElementById("exclu_html"));
		document.getElementById("exclu_"+split[1]).disabled=true;
	}
     	
}


function clear_fields(){
  $("#login_user_name").val("");
  $("#user_message").css('display','none');
  $("#password_message").css('display','none');
  $("#login_password").val("");
  $("#sussess_message").css('display','none');
  
  $("#emp_user_name").val("");
  $("#emp_user_name_message").css('display','none');
  $("#emp_password").val("");
  $("#emp_password_message").css('display','none');
  
  
  $("#reg_emp_user_name").val("");
  $("#reg_emp_user_name_message").css('display','none');
  $("#reg_password").val("");
  $("#reg_emp_password_message").css('display','none');
  $("#emp_phone_number").val("");
  $("#emp_phone_number_message").css('display','none');
  $("#emp_email").val("");
  $("#emp_email_message").css('display','none'); 
  
  
  
  $("#reg_user_name").val("");
  $("#reg_password_message").css('display','none');
  $("#reg_password").val("");
  $("#reg_password_message").css('display','none');
  $("#reg_phone_number").val("");
  $("#reg_phone_number_message").css('display','none');
  $("#reg_email").val("");
  $("#reg_email_message").css('display','none');
  $("#resume_messgae").css('display','none');
  
}

//This function displays the login box when called
function vpb_show_login_box()
{
	$("#vpb_pop_up_background").css({
		"opacity": "0.4"
	});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_login_pop_up_box").fadeIn('fast');
	window.scroll(0,0);
}


//This function hides both the Sign-up Box and Login Box when called
function vpb_hide_popup_boxes()
{
	$("#vpb_signup_pop_up_box").hide(); //Hides the sign-up box when clicked outside the form
	$("#vpb_login_pop_up_box").hide(); //Hides the login box when clicked outside the form
	$("#vpb_pop_up_background").fadeOut("slow");
}