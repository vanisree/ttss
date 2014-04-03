 <!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link href="css/style.css" type="text/css" rel="stylesheet">
<style type="text/css">
</style>
  <title>.:Puppig:.</title>
 </head>
 <body>
 <?php include("include/header.php"); ?>
<!-- END: Sticky Header -->
 
<!-- BEGIN: Page Content -->
<div id="container">
    <div id="content">
	<div align="center" class="grid_full" style="margin:1% auto;">
 <form action='employerverification.php' method='post' name='login' enctype='multipart/form-data' >
		  <center><label>
        <input type='radio' name='RadioGroup1' value='candidate' checked='checked' id='RadioGroup1_0' onclick="window.location='signup.php';">
        <font size='5' color=''>Candidate</font></label>
     
      <label>
        <input type='radio' name='RadioGroup1' value='employer'  id='RadioGroup1_1' checked='checked' >
        <font size='5' color=''>Employer</font></label>
</center>
 <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='user_name' placeholder='username' id='user_name' size='25'/></center>
		  </div>           <div class='formElements'>
		    
		    	  <div class='formElements'>
		    
		    <center><input type='password' class='font_family box' name='password' placeholder='password' id='password' size='25'/></center>
		  </div>
		  <div class='formElements'>
		    
		    <center><input type='password' class='font_family box' name='confrm' placeholder='conformpassword' id='compwd' size='25'/></center>
		  </div>
		  
		  <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='phone_number' placeholder='phone number' id='phone_number' size='25' /></center>
		  </div>
		  <div class='formElements'>
		     
			 <center><input class='font_family box' type='email' name='email' placeholder='email(company mail id)' id='email' size='25'/></center>

		  </div>
		  <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='company_name' placeholder='company name' id='company_name' size='25' /></center>
		  </div>
	
		  <div class='formElements'>
		    
		    <center><input type='text' class='font_family box' name='web_site' placeholder='website' id='web_site' size='25' /></center>
		  </div><div class='formElements'>
				  <center><input type='submit' name='submit' value='submit'  class='font_family box1'/><br></div></center>
    </div>
	</div>
	</div>
</div>

<!-- END: Page Content -->
 
<!-- BEGIN: Sticky Footer -->
 <?php include("include/footer.php"); ?>

 </body>
</html>
