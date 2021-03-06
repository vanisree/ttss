<html>
<head>
   <script type="text/javascript" src="js/min.js"></script>
   <script>
 $(document).ready(function(){
	  var login_user_name=$("#login_user_name");
	  
	  $("#register").submit(function( event ) {
         if(validate_register_fields()){
		   return true;
		 }else{
		  return false;
		 }
         event.preventDefault();
        });
		
		login_user_name.blur(validate_username());
		$("#login_form").submit(function( event ) {
         validate_fields();
         event.preventDefault();
        });
		
		$("#employee_form").submit(function( event ) {
         validate_emp_fields();
         event.preventDefault();
        });
		
		$("#employee_register_form").submit(function( event ) {
         if(validate_emp_register_fields()){
		   return true;
		 }else{
		  return false;
		 }
         event.preventDefault();
        });
		
		function validate_fields(){
	    if(validate_username()&validate_password()){
		  success();
		  return false;
		 }else{
		return false;
		}
	 }
	 function validate_username(){
	   //var user_name=document.getElementById('login_user_name').value;
	   var user_name=$("#login_user_name").val();
	   if(user_name===""||user_name==="null"){
	     document.getElementById('user_message').innerHTML="Username Required";
		 document.getElementById('user_message').style.display="block";
		 return false;
	   }else 
	   if(user_name.length<4){
	     document.getElementById('user_message').innerHTML="must have 4 characters";
		 document.getElementById('user_message').style.display="block";
		 return false;
	   }else{
	   document.getElementById('user_message').style.display="none";
	   return true;
	   }
	}
	
	function validate_password(){
	   var user_password=document.getElementById('login_password').value;
	   if(user_password===""||user_password==="null"){
	     document.getElementById('password_message').innerHTML="Password Required";
		 document.getElementById('password_message').style.display="block";
		 return false;
	   }else 
	   if(user_password.length<4){
	     document.getElementById('password_message').innerHTML="must have 4 characters";
		 document.getElementById('password_message').style.display="block";
		 return false;
	   }else{
	    document.getElementById('password_message').style.display="none";
	   return true;
	   }
	}
	
	
	function validate_register_fields(){
	if(validate_reg_username()&validate_reg_password()&validate_phone_number()&validate_reg_email()&validate_files()&validate_reg_passwords()){
		  return true;
		 }else{
		return false;
		}
	 }
	 
	function validate_reg_username(){
	var user_name=$("#reg_user_name").val();
	   if(user_name===""||user_name==="null"){
	     document.getElementById('reg_user_name_message').innerHTML="Username Required";
		 document.getElementById('reg_user_name_message').style.display="block";
		 return false;
	   }else 
	   if(user_name.length<4){
	     document.getElementById('reg_user_name_message').innerHTML="must have 4 characters";
		 document.getElementById('reg_user_name_message').style.display="block";
		 return false;
	   }else{
	   document.getElementById('reg_user_name_message').style.display="none";
	   return true;
	   }
	}
	
	function validate_reg_password(){
	 var user_password=document.getElementById('reg_password').value;
	   if(user_password===""||user_password==="null"){
	     document.getElementById('reg_password_message').innerHTML="Password Required";
		 document.getElementById('reg_password_message').style.display="block";
		 return false;
	   }else 
	   if(user_password.length<4){
	     document.getElementById('reg_password_message').innerHTML="must have 4 characters";
		 document.getElementById('reg_password_message').style.display="block";
		 return false;
	   }else{
	    document.getElementById('reg_password_message').style.display="none";
	   return true;
	   }
	}
	function validate_reg_passwords(){
	 var user_password=document.getElementById('reg_password').value;
	 var user_password1=document.getElementById('reg_confirm_password').value;
	 //alert(user_password+" "+user_password1);
	 if(user_password==user_password1){
		document.getElementById('reg_confirm_password_message').style.display="none";
	   return true;
	 }else{
	     document.getElementById('reg_confirm_password_message').innerHTML="passwsord and confirm password Notmatched";
		 document.getElementById('reg_confirm_password_message').style.display="block";
	   return false;
	 }
	}
	function validate_phone_number(){
	var phoneno = /^\d{10}$/; 
	 var reg_phone_number=document.getElementById('reg_phone_number').value;
	   if(reg_phone_number===""||reg_phone_number==="null"){
	     document.getElementById('reg_phone_number_message').innerHTML="Phone Number Required";
		 document.getElementById('reg_phone_number_message').style.display="block";
		 return false;
	   }else  
	   if(!(reg_phone_number.match(phoneno))){
	     document.getElementById('reg_phone_number_message').innerHTML="Not a valid Number";
		 document.getElementById('reg_phone_number_message').style.display="block";
		 return false;
	   }else{
	    document.getElementById('reg_phone_number_message').style.display="none";
	   return true;
	   }
	 }
	
	function validate_reg_email(){
	 var email = document.getElementById('reg_email').value;
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 if(email===""||email==="null"){
	     document.getElementById('reg_email_message').innerHTML="Email Required";
		 document.getElementById('reg_email_message').style.display="block";
		 return false;
	   }else if (!filter.test(email)) {
         document.getElementById('reg_email_message').innerHTML="Not Valid Email";
		 document.getElementById('reg_email_message').style.display="block";
		 return false;
	 }else{
	  document.getElementById('reg_email_message').style.display="none";
	  return true;
	 }
	
	}
	
	function validate_files(){
	     if(!(/.*\.(doc)|(docx)|(pdf)$/.test(document.getElementById('resume').value.toLowerCase()))){
		  document.getElementById('resume_messgae').innerHTML="Required File (*doc/*.docx/*.pdf)";
		  document.getElementById('resume_messgae').style.display="block";
		  return false;
		}else{
		  document.getElementById('resume_messgae').style.display="none";
		  return true;
		}
	}
	function success(){
	var user_name=document.getElementById('login_user_name').value;
	var user_password=document.getElementById('login_password').value;
     var urls="./login1.php?user_name="+user_name+"&password="+user_password
	$.ajax({
       type: "POST",
       url: "login1.php",
       data: { user_name: user_name, password: user_password }
    }).done(function( msg ) {
    		if(msg==="0"){
			  document.getElementById('sussess_message').innerHTML="Please enter valid username/password details ";
		      document.getElementById('sussess_message').style.display="block";
			}else{
			    document.getElementById('sussess_message').innerHTML="Success.";
				document.getElementById('sussess_message').style.display="none";
			    window.location="./candidateprofile.php";
			}
	 
  });
	return false;
 }
 
 
 function validate_emp_fields(){
	if(validate_emp_username()&validate_emp_password()){
	      emp_success();
		  return true;
		 }else{
		return false;
		}
	 }
	 function validate_emp_username(){
	   //var user_name=document.getElementById('login_user_name').value;
	   var user_name=$("#emp_user_name").val();
	   if(user_name===""||user_name==="null"){
	     document.getElementById('emp_user_name_message').innerHTML="Username Required";
		 document.getElementById('emp_user_name_message').style.display="block";
		 return false;
	   }else 
	   if(user_name.length<4){
	     document.getElementById('emp_user_name_message').innerHTML="must have 4 characters";
		 document.getElementById('emp_user_name_message').style.display="block";
		 return false;
	   }else{
	   document.getElementById('emp_user_name_message').style.display="none";
	   return true;
	   }
	}
	
	function validate_emp_password(){
	   var user_password=document.getElementById('emp_password').value;
	   if(user_password===""||user_password==="null"){
	     document.getElementById('emp_password_message').innerHTML="Password Required";
		 document.getElementById('emp_password_message').style.display="block";
		 return false;
	   }else 
	   if(user_password.length<4){
	     document.getElementById('emp_password_message').innerHTML="must have 4 characters";
		 document.getElementById('emp_password_message').style.display="block";
		 return false;
	   }else{
	    document.getElementById('emp_password_message').style.display="none";
	   return true;
	   }
	}
	
	function emp_success(){
	var user_name=document.getElementById('emp_user_name').value;
	var user_password=document.getElementById('emp_password').value;
    $.ajax({
       type: "POST",
       url: "login2.php",
       data: { user_name: user_name, password: user_password }
    }).done(function( msg ) {
    		if(msg==="0"){
			  document.getElementById('emp_sussess_message').innerHTML="Please enter valid username/password";
		      document.getElementById('emp_sussess_message').style.display="block";
			}else{
			    document.getElementById('emp_sussess_message').innerHTML="Success";
			    window.location="./my_home.php";
				document.getElementById('emp_sussess_message').style.display="none";
			}
	 
  });
	return false;
 }
 function validate_emp_register_fields(){
  if(validate_emp_reg_username()&validate_emp_reg_password()&validate_emp_phone_number()&validate_emp_reg_email()&validate_emp_passwords()&validate_emp_company()){
		  return true;
		 }else{
		return false;
		}
  }
  function validate_emp_reg_username(){
	var user_name=$("#reg_emp_user_name").val();
	   if(user_name===""||user_name==="null"){
	     document.getElementById('reg_emp_user_name_message').innerHTML="Username Required";
		 document.getElementById('reg_emp_user_name_message').style.display="block";
		 return false;
	   }else 
	   if(user_name.length<4){
	     document.getElementById('reg_emp_user_name_message').innerHTML="must have 4 characters";
		 document.getElementById('reg_emp_user_name_message').style.display="block";
		 return false;
	   }else{
	   document.getElementById('reg_emp_user_name_message').style.display="none";
	   return true;
	   }
	}
	
	function validate_emp_reg_password(){
	 var user_password=document.getElementById('reg_emp_password').value;
	   if(user_password===""||user_password==="null"){
	     document.getElementById('reg_emp_password_message').innerHTML="Password Required";
		 document.getElementById('reg_emp_password_message').style.display="block";
		 return false;
	   }else 
	   if(user_password.length<4){
	     document.getElementById('reg_emp_password_message').innerHTML="must have 4 characters";
		 document.getElementById('reg_emp_password_message').style.display="block";
		 return false;
	   }else{
	    document.getElementById('reg_emp_password_message').style.display="none";
	   return true;
	   }
	}
	
	
	function validate_emp_passwords(){
	 var user_password=document.getElementById('reg_emp_password').value;
	 var user_password1=document.getElementById('emp_confirm_password').value;
	 //alert(user_password+" "+user_password1);
	 if(user_password==user_password1){
		document.getElementById('emp_confirm_password_message').style.display="none";
	   return true;
	 }else{
	     document.getElementById('emp_confirm_password_message').innerHTML="passwsord and confirm password Notmatched";
		 document.getElementById('emp_confirm_password_message').style.display="block";
	   return false;
	 }
	}
	
	
	function validate_emp_phone_number(){
	var phoneno = /^\d{10}$/; 
	 var reg_phone_number=document.getElementById('emp_phone_number').value;
	   if(reg_phone_number===""||reg_phone_number==="null"){
	     document.getElementById('emp_phone_number_message').innerHTML="Phone Number Required";
		 document.getElementById('emp_phone_number_message').style.display="block";
		 return false;
	   }else  
	   if(!(reg_phone_number.match(phoneno))){
	     document.getElementById('emp_phone_number_message').innerHTML="Not a valid Number";
		 document.getElementById('emp_phone_number_message').style.display="block";
		 return false;
	   }else{
	    document.getElementById('emp_phone_number_message').style.display="none";
	   return true;
	   }
	 }
	
	function validate_emp_reg_email(){
	 var email = document.getElementById('emp_email').value;
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	 if(email===""||email==="null"){
	     document.getElementById('emp_email_message').innerHTML="Email Required";
		 document.getElementById('emp_email_message').style.display="block";
		 return false;
	   }else if (!filter.test(email)) {
         document.getElementById('emp_email_message').innerHTML="Not Valid Email";
		 document.getElementById('emp_email_message').style.display="block";
		 return false;
	 }else{
	  document.getElementById('emp_email_message').style.display="none";
	  return true;
	 }
	
	}
	function validate_emp_company(){
	var company_name=$("#company_name").val();
	   if(company_name===""||company_name==="null"){
	     document.getElementById('reg_emp_company_message').innerHTML="Company Name Required";
		 document.getElementById('reg_emp_company_message').style.display="block";
		 return false;
	   }else 
	   if(company_name.length<4){
	     document.getElementById('reg_emp_company_message').innerHTML="must have 4 characters";
		 document.getElementById('reg_emp_company_message').style.display="block";
		 return false;
	   }else{
	   document.getElementById('reg_emp_company_message').style.display="none";
	   return true;
	   }
	}
	
	
});
</script>
<style>
  .error{
     color:red;
	 font-family:comic sans ms;
	 display:none;
  }
</style>
</head>
<body>
<div id="vpb_pop_up_background"></div><!-- General Pop-up Background -->
<!-- Sign Up Box Starts Here -->
<div id="vpb_signup_pop_up_box">
<div id="fg_container_header">
        <div align="left" id="style">
        <input type="radio" name="rad" onclick='toggle("block","none")' checked/> <font size="5" color="" style="font-family:comic sans ms;">candidate </font>
<input type="radio" name="rad" onclick='toggle("none","block")'/> <font size="5" color="" style="font-family:comic sans ms;">employer</font><a href="index.php" style="float:right;margin-right:4px;"><b>x</b></a>
    </div></div><br>
	


<div style="display:block" id="div1">
    <table width="100%" rules=cols  >
   <tr>
	<td width="50%">
	<center><font size="5" color="" style="font-family:comic sans ms;">signup</font></center>
		  <form id="register" action="verification.php" method='post' name='registration' enctype='multipart/form-data'>		  
		    <div class='formElements'>
		    <center><input type='text' class='font_family box' name='reg_user_name' placeholder='username*' id='reg_user_name' size='20'/></center>
			<center><span class="error" id="reg_user_name_message"></span></center>
		  </div>
		  <div class='formElements'>
		    <center><input type='password' class='font_family box' name='reg_password' placeholder='password*' id='reg_password' size='20'/></center>
			<center><span class="error" id="reg_password_message"></span></center>
		  </div>
		  
		  <div class='formElements'>
		    
		    <center><input type='password' class='font_family box' name='reg_confirm_password' placeholder='confirm password' id='reg_confirm_password' size='20'/></center>
			<center><span class="error" id="reg_confirm_password_message"></span></center>
		  </div>
		  <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='reg_phone_number' placeholder='phone number*' id='reg_phone_number' size='20' /></center>
			<center><span class="error" id="reg_phone_number_message"></span></center>
		  </div>
		  <div class='formElements'>
		     <center><input class='font_family box' type='text' name='reg_email' placeholder='email*' id='reg_email' size='20'/></center>
			 <center><span class="error" id="reg_email_message"></span></center>
		</div>
		   <div class='formElements'>
		  	<center><font size='4' color='' style="font-family:comic sans ms;">Resume:</font><input type='file' name='resume' id='resume' size='50' />
			</div><br/><center><span class="error" id="resume_messgae"></span></center><div class='formElements'>
				  <center><input type='submit' name='register' value='submit'  class='font_family box1' style="font-family:comic sans ms;"/><br></center>
				  <br>
				  </form>
		  </td></div>
		  
	<td width="50%"><label>
	<center><font size="5" color="" style="font-family:comic sans ms;">signin</font></center>
	<form action="login1.php" method='post' id="login_form">   
		  <div class='formElements'>
		    <center><input type='text' name='user_name' placeholder='username' id='login_user_name' size='20' class='font_family box'/></center>
			<center><span style="color:red;display:none;" id="user_message">username required</span></center>
		  </div>
		  <div class='formElements'>
		   <center><input class='font_family box' type='password' name='password' placeholder='password' id='login_password' size='20'/></center>
		   <center><span style="color:red;display:none;" id="password_message">Password Required</span></center>
		  </div>
		  <br>
		  <center><input type='submit' name='submit' value='submit'  class='font_family box1' style="font-family:comic sans ms;" /></center>
		    <br>
		  <center><span style="color:red" id="sussess_message"></span></center>
		
		  </form>
		  </td>
   </tr>
   </table>
   </div>
<div class="hide" id="div2">
<table width="100%" rules=cols >
   <tr>
	<td width="50%">
	<center><font size="5" color="" style="font-family:comic sans ms;" id="employee_signup">signup</font></center>
		  <form id="employee_register_form" action="employerverification.php" method='post'>		  
		    <div class='formElements'>
		  <center><input type='text' class='font_family box' name='reg_emp_user_name' placeholder='username*' id='reg_emp_user_name' size='20'/></center>
		         <center><span class="error" id="reg_emp_user_name_message"></span></center>
		  </div>
		  <div class='formElements'>
		    <center><input type='password' class='font_family box' name='reg_emp_password' placeholder='password*' id='reg_emp_password' size='20'/></center>
			<center><span class="error" id="reg_emp_password_message"></span></center>
		  </div>
		  <div class='formElements'>
		    <center><input type='password' class='font_family box' name='reg_emp_confirm_password' placeholder='confirm password' id='emp_confirm_password' size='20'/></center>
			<center><span class="error" id="emp_confirm_password_message"></span></center>
		  </div>
		  <div class='formElements'>
		    <center><input type='text' class='font_family box' name='emp_phone_number' placeholder='phone number*' id='emp_phone_number' size='20'/></center>
			<center><span class="error" id="emp_phone_number_message"></span></center>
		  </div>
		  <div class='formElements'>
		     <center><input class='font_family box' type='text' name='emp_email' placeholder='email(company mail id)*' id='emp_email' size='20'/></center>
			<center><span class="error" id="emp_email_message"></span></center>
		  </div>
		  <div class='formElements'>
		    <center><input type='text' class='font_family box' name='company_name' placeholder='company name*' id='company_name' size='20'/></center>
			<center><span class="error" id="reg_emp_company_message"></span></center>
		  </div>
		  <div class='formElements'>
		    <center><input type='text' class='font_family box' name='website' placeholder='website*' id='website' size='20'/></center>
			<center><span class="error" id="reg_emp_user_name_message"></span></center>
		  </div>
		  <div class='formElements'>
		  <center><input type='submit' name='submit' value='submit'  class='font_family box1' style="font-family:comic sans ms;"/><br></div></center>
         </div>
		</form>
		  </td></div>
	<td width="50%">
	<center><font size="5" color="" style="font-family:comic sans ms;">signin</font></center>
	<form id="employee_form" action="login2.php" method='post'>   
		  <div class='formElements'>
		    <center><input type='text' name='emp_user_name' placeholder='username' id='emp_user_name' size='20' class='font_family box'/></center>
			<center><span class="error" id="emp_user_name_message"></span></center>
		  </div>
		  <div class='formElements'>
			 <center><input class='font_family box' type='password' name='password' placeholder='password' id='emp_password' size='20'/></center>
			 <center><span class="error" id="emp_password_message"></span></center>
		  </div>
		  <br>
		  <center><input type='submit' name='submit' value='submit'  class='font_family box1' style="font-family:comic sans ms;" /></center><br>
		  <center><span style="color:red" id="emp_sussess_message"></span></center>
		  </form>
		  </td>
   </tr>
   </table>
</div>
</div>
</body>
</html>