<?php
session_start();
include("include/connect.php");
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL & E_STRICT);
ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);  # ...but do log them
if(isset($_POST['search']))
{
//print_r($_POST);
$question=$_POST['question'];
$result=mysql_query("SELECT * FROM search WHERE keyword LIKE '%$question%'");
//echo "SELECT * FROM members_registration WHERE name LIKE '%$question%'";
//exit;
if($row=@mysql_fetch_array($result)) 
  {
  header("location:search.php?question=".$question."&&action=displaydetails");
  }else
  {
  header("location:index.php?result=nodetails");
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:Puppig:.</title>
<!-- Required header files -->
<link href="css/style3.css" rel="stylesheet" type="text/css">
<link href="css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/min.js"></script>
<script language="javascript" type="text/javascript" src="js/vpb_script.js"></script>
<script type="text/javascript">
function toggle(style1,style2) {
document.getElementById("div1").style.display=style1;
document.getElementById("div2").style.display=style2;
}
</script>
  
</head>
<body>
<!-- Sign-up and Login Links Starts Here -->
<?php include("include/header.php"); ?>
<br clear="all" />
<?php include("include/popup.php"); ?>
<div id="container">
<div id="content">
	<section data-role="content" id="toggle">
      <div align="center" class="grid_full" style="margin:13% auto ;">
		   <p style="font-family:'Comic Sans MS';font-size:80px;cursor:pointer;"></p>
		  <?php
include("include/connect.php");
$confirm_code=md5(uniqid(rand())); 
$user_name=$_POST['reg_emp_user_name'];
$password=$_POST['reg_emp_password'];
$phone_number=$_POST['emp_phone_number'];
$email=$_POST['emp_email'];
$company_name=$_POST['company_name'];
$website=$_POST['website'];
//echo $user_name.$password.$phone_number.$email;
 $sql="INSERT INTO emptemp(confirm_code,user_name,password,phone_number,email,company_name,website)VALUES('$confirm_code','$user_name','$password','$phone_number','$email','$company_name','$website' )";
$result=mysql_query($sql);
		if($result){
	$to=$email;
$subject="Your confirmation link here";
$header="from: Puppig <puppig@puppig.com>";
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://www.puppig.com//employerconformation.php?passkey=$confirm_code";
$sentmail = mail($to,$subject,$message,$header);
}
else {
echo "<font size='5' color='' style='font-family:comic sans ms;'>not found your email in our database</font>";
}
if($sentmail){
echo "<font size='5' color='' style='font-family:comic sans ms;'>your confirmation link has been sent to your email address.</font>";
}
else {
echo "<font size='5' color='' style='font-family:comic sans ms;' >cannot send confirmation link to your e-mail address</font>";
}

?>
<?php include("include/footer.php"); ?>
</body>
</html>