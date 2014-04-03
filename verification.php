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
$user_name=$_POST['reg_user_name'];
$password=$_POST['reg_password'];
$phone_number=$_POST['reg_phone_number'];
$email=$_POST['reg_email'];
$random_text=rand();
//echo $user_name.$password.$phone_number.$email;
if(isset($_FILES['resume'])){
    $errors= array();
    $file_name = $_FILES['resume']['name'];
    $file_size =$_FILES['resume']['size'];
    $file_tmp =$_FILES['resume']['tmp_name'];
    $file_type=$_FILES['resume']['type'];   
   $info = new SplFileInfo($file_name);
	//echo $info->getFilename();
	$extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
	//echo $extension;
    $extensions = array("doc","pdf","docx");        
    if(in_array($extension,$extensions )=== false){
    $errors[]="<font size='5' color='' style='font-family:comic sans ms;'>extension not allowed, please choose a doc or pdf file.    </font>";
    }
    if($file_size > 2097152){
    $errors[]='File size must be excately 2 MB';
    }               
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"res/".$file_name);
        rename("res/".$file_name,"res/".$user_name."_".rand().".".$extension);
    $sql="INSERT INTO temp(confirm_code,user_name,password,phone_number,email)VALUES('$confirm_code','$user_name','$password','$phone_number','$email' )";
$result=mysql_query($sql);
		if($result){
	$to=$email;
$subject="Your confirmation link here";
$header="from: Puppig <puppig@puppig.com>";
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://www.puppig.com//confirmation.php?passkey=$confirm_code";
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
        
    }else{
        print_r($errors);
    }
}
?>
<?php include("include/footer.php"); ?>
</body>
</html>