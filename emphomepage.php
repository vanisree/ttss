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
<!--<?php include("include/header1.php"); ?>-->
<div id="container">
<div id="content">
	<section data-role="content" id="toggle">
      <div align="center" class="grid_full" style="margin:13% auto ;">
		   <p style="font-family:'Comic Sans MS';font-size:80px;cursor:pointer;"></p>
	
<a href="addjobs.php"><font size="5" color="" style="cursor:pointer;align:left; font-family:'Comic Sans MS';">Add Jobs</font></a><br>
<a href="viewjobs.php"><font size="5" color="" style="cursor:pointer;align:left; font-family:'Comic Sans MS';">View Jobs</font></a><br>
<a href="jobstats.php"><font size="5" color="" style="cursor:pointer;align:left; font-family:'Comic Sans MS';">Job Stats</font></a><br>



<?php include("include/footer.php"); ?>
</body>
</html>