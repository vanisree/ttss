<?php
session_start();
include("include/connect.php");
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
<script type="text/javascript" src="js/jquery.min.js"></script>
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
		   <p style="font-family:'Comic Sans MS';font-size:80px;cursor:pointer;">puppig</p>
		  <?php

include('config.php');
$passkey=$_GET['passkey'];
$sql1="SELECT * FROM emptemp WHERE confirm_code ='$passkey'";
$result1=mysql_query($sql1);
if($result1)
{
$sql2="INSERT INTO employer(user_name,password,phone_number,email,company_name,website)select  user_name,password,phone_number,email,company_name,website from emptemp where confirm_code ='$passkey'";;
$result2=mysql_query($sql2);
}
else {
echo "<font size='5' color='' style='font-family:comic sans ms;' >wrong confirmation code</font>";
}
if($result2)
{
echo "<img src='images/alert.jpg' width='30' height='20' border='0' alt=''>&nbsp;&nbsp;<font size='5' color='' style='font-family:comic sans ms;' >your account has been activated please sign-in </font>";
$sql3="DELETE FROM emptemp WHERE confirm_code = '$passkey'";
$result3=mysql_query($sql3);
}else{
   echo "<font size='5' color='' style='font-family:comic sans ms;' >database in maintaince</font>";
}
?>



			 <?php include("include/footer.php"); ?>
</body>
</html>