<?php
include("include/connect.php");
session_start();
if (!isset($_SESSION['user_name'])) {
header('Location: index.php');
}

if(isset($_POST['search']))
{
//print_r($_POST);
$question=$_POST['question'];
$result=mysql_query("SELECT * FROM resume WHERE skills LIKE '%$question%'");
//echo "SELECT * FROM members_registration WHERE name LIKE '%$question%'";
//exit;
if($row=@mysql_fetch_array($result)) 
  {
  header("location:results.php?question=".$question."&&action=displaydetails");
  }else
  {
  header("location:my_home.php?result=nodetails");
  }
}
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link href="css/style1.css" type="text/css" rel="stylesheet">
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
	 <div id="layer" style="height:100%;">
	 <div id="horizontalmenu">
        <ul class="menu">
            <li> <a href="#"><font size="5" color="#000000" style="font-family:comic sans ms;">include</a><img src="images/2.png" width="30" height="20" border="0" alt="">
                <ul class="sub-menu">
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE=''  ><font size="3" color="" style="font-family:comic sans ms;">java</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">c</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">.net</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">php</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">testing</font>
                    </li>
                </ul>
            </li>
            <li> <a href="#"><font size="5" color="#000000" style="font-family:comic sans ms;">exclude</font></a><img src="images/2.png" width="30" height="20" border="0" alt="">
                <ul class="sub-menu">
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">java</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">c</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">.net</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">php</font>
                    </li>
                    <li><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' ><font size="3" color="" style="font-family:comic sans ms;">testing</font>
                    </li>
                </ul>
            </li>
	</div></div><br/>
	<div id="layer1">
        <a href=""><font size="5" color="" style="cursor:pointer; font-family:'Comic Sans MS';">puppig job post</font></a>
		<a href=""><font size="5" color="" style="cursor:pointer; font-family:'Comic Sans MS';">puppig profile</font></a>
	 </div>
	</div>
</div>

<!-- END: Page Content -->
 
<!-- BEGIN: Sticky Footer -->
  <?php include("include/footer1.php"); ?>
 </body>
</html>
