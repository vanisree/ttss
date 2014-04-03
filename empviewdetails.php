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
	<form action='verification.php' method='post' name='login' enctype='multipart/form-data' >
		  
		    
		    <table class='formElements' border='0'>
			<tr>
			<td width='25%' align='right'>
		    Name : 
			</td>
			<td>
			<input type='text' class='font_family box' name='name' placeholder='Name' id='job_title' size='15'/>
		  </td>
			
		    </tr>
			<tr>
			<td width='25%' align='right'>
		    Phone No :
			</td>
			<td> <input type='password' class='font_family box' name='phoneno' placeholder='phone no' id='phoneno' size='15'/>
		  </td>
			 </tr>
			<tr>
			<td width='25%' align='right'>
		    Email Id  :</td>
			<td> <input type='skills' class='font_family box' name='email_id' placeholder='Email ID' id='email_id' size='15'/></center>
		  </td>
			
		    </tr>
		    <tr>
			<td width='25%' align='right'>
		    Company Name : </td>
			<td><input type='text' class='font_family box' name='company_name' placeholder='Company Name' id='company_name' size='15' />
		  </td>
			 </tr>
		    <tr>
			<td width='25%' align='right'>
		     
			 Website :</td>
			<td> <input class='font_family box' type='website' name='website' placeholder='Website' id='website' size='15'/>

		 </td>
			 </tr>
			 </table>
		   <input type="submit" value="EDIT" name="edit" class="font_family box1" style="margin-top:0%;"/>
		   
    </div>
	</div>
</div>

<!-- END: Page Content -->
 
<!-- BEGIN: Sticky Footer -->
 <?php include("include/footer.php"); ?>

 </body>
</html>
