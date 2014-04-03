<?php
session_start();
include("include/connect.php");
if(isset($_POST['search']))
{
//print_r($_POST);
$question=$_POST['question'];
$result=mysql_query("SELECT * FROM puppig.puppig WHERE keyword LIKE '%$question%'");
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
<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<title>.:Puppig:.</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<style type="text/css">
</style>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<?php include("include/header.php"); ?>
<div class="clearboth">&nbsp;</div>
<section data-role="content" id="toggle">
	<div class="standard_width" id="home">
    	<div align="center" class="grid_full" style="margin:10% auto;">
		  <p style="font-family:'Comic Sans MS';font-size:80px;cursor:pointer;">puppig</p>
		  <form action="" method="post" name="test" id="test">
			<div style="width:100%;margin: 10px auto;">
			   <input type="text" name="question" id="question" class="font_family box"/>
			   <input type="submit" value="Search" name="search" class="button_example font"/>
			 </div>
			 <div style="text-align:center;">
			 <?php
		     if(@$_POST['result']=="nodetails")
			{
				echo '<font color="red" size="6px" >'; 
				echo "search not found";
				echo '</font>';
			}
          	?>
			</div>
       </form>
  </div>
</section>
<div class="clearboth">&nbsp;</div>
<footer class="main_footer">

	<div class="standard_width">
    	<ul class="footer_nav"><li class="float_left">Copyright (c) Think genral All rights reserved.</li></ul>
</div>
<div class="standard_width">
	    <nav  data-role="navbar" role="navigation">
        	<div class="menunav">
			    <h1 title="puppig" style="float:left;width:20%;height:80px; line-height:30px;">
				<a href="index.php" data-title="puppig" style="font-variant:inherit;">p</a>
        </h1>
			<div style="width:45%; float:right;background:#222;">
            	<ul id="menu_nav">
				    <li><a href="javascript:void(0)" id="home" class="current">home</a></li>
                	<li><a href="javascript:void(0)" id="about">about</a></li>
					<li><a href="javascript:void(0)" id="contact">contact</a></li>
					<li><a href="javascript:void(0)" id="carerrs">careers</a></li>
                    <li><a href="javascript:void(0)" id="signin">sign in</a></li>
                </ul>
			</div>
            </div>
        </nav>
    </div>
</footer>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e){
	$("#menu_nav li a").click(function(){
	    $("#menu_nav li a").removeClass("current");
	    $(this).addClass("current");
		if($(this).attr('id')=="home"){
		  $(location).attr('href','index.php');
		}else{
		$.ajax({ type:"POST", url:"toggle.php", data:"page="+$(this).attr('id'),
			success:function(str){
				$("#toggle").html(str);
			}
		});
	 }
  })
})
</script>
</body>
</html>
