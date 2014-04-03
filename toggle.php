<?php 
$page = $_POST['page'];
	if($page == 'signin'){
	$element = "<div class='standard_width'>
	    <div role='form' class='allform'>
		 
		  <form action='' method='post' name='login' >
		  <div class='formElements'>
		  
		    <label></label><br>
		    <center><input type='text' name='uname' placeholder='username' id='uname' size='15' class='font_family box' /></center>
		  
		  </div>
		  <div class='formElements'>
		     <label></label><br>
			 <center><input class='font_family box' type='password' name='pwd' placeholder='password' id='pwd' size='15' /></center>
		  </div>
		  <br>
		  <center><input type='submit' name='submit' value='submit'  class='button'/></center><br>
		  
	</div>";
	}
	
	else if($page == 'carerrs'){
       $element ="<div class='standard_width'><div class=\"allcontent\"><h2 class=\"contentdesc font-family\">Please answer the below questions and we will create an opening based on your answers.</h2><div></div>"	;
	}else if($page == 'about'){
       $element ="<div class='standard_width'><div class=\"allcontent\"><h2 class=\"contentdesc font-family\">Puppig 
relationship has grown over the last several years through the deployment of an outcome-based model, which we use for several of our projects. We find this model to be an important and beneficial aspect of our relationship going forward.
 </h2><div></div>"	;
	}else if($page == 'contact'){
       $element ="<div class='standard_width'><div class=\"allcontent\"><h2 class=\"contentdesc font-family\">E-mail:<a href=\"mailto:puppig@puppig.com\">puppig@puppig.com</a></h2><div></div>";
	}
	else if($page == 'signup'){
       $element ="<div class='standard_width'><div class=\"allcontent\"><form action='verification.php' method='post' name='login' enctype='multipart/form-data' >
		  <center><label>
        <input type='radio' name='RadioGroup1' value='candidate' checked='checked' id='RadioGroup1_0'>
        <font size='5' color=''>candidate</font></label>
     
      <label>
        <input type='radio' name='RadioGroup1' value='employer'  id='RadioGroup1_1'>
        <font size='5' color=''>employer</font></label>
</center>
		             <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='uname' placeholder='username' id='uname' size='25'/></center>
		  </div>
		  <div class='formElements'>
		    
		    <center><input type='password' class='font_family box' name='pwd' placeholder='password' id='pwd' size='25'/></center>
		  </div>
		  <div class='formElements'>
		    
		    <center><input type='password' class='font_family box' name='confrm' placeholder='confirm password' id='compwd' size='25'/></center>
		  </div>
		  
		  
		  <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='phno' placeholder='phone number' id='phno' size='25'/></center>
		  </div>
		  <div class='formElements'>
		     
			 <center><input class='font_family box' type='email' name='email' placeholder='email' id='email' size='25'/></center>

		  </div>
		   <div class='formElements'>
		  	<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size='' color=''>Resume:</font><input type='file' name='file' id='resume' size='50' /></center>
			</div><div class='formElements'>
				  <center><input type='submit' name='submit' value='submit'  class='button'/><br></div></center>
		  <div></div>";
	}else{
	$element ="<div class='standard_width'><div class=\"allcontent\"><h2 class=\"contentdesc font-family\">Sorry Page Not Found</h2><div></div>"	;
	}
	echo $element;
?>