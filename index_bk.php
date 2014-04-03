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
  header("location:search1.php?question=".$question."&&action=displaydetails");
  }else
  {
  header("location:search1.php?result=nodetails");
  }
}
?>
<style>

</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Puppig Home::</title>
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
<script type="text/javascript">

var image1=new Image()
image1.src="images/3.jpg"
var image2=new Image()
image2.src="images/5.jpg"
var image3=new Image()
image3.src="images/4.jpg"
</script>
  
</head>
<body>
<!-- Sign-up and Login Links Starts Here -->
<?php include("include/header.php"); ?>
<?php include("include/popup.php"); ?>

<div id="container">
<div id="content">
    <div id="layer">
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
	</div></div><br>
	<div id="layer1">
        <img src="firstcar.gif" name="slide" width="100%" height="250" />
		<script>


var step=1
function slideit(){

if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<3)
step++
else
step=1

setTimeout("slideit()",2500)
}
slideit()

</script>
</div>
</div>
<?php include("include/footer.php"); ?>
</body>
</html>