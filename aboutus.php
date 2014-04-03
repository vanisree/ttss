<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
	<title>.:Puppig:.</title>
	<!-- Required header files -->
	<link href="css/style3.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
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
<article>
<a href="addjobs.php"><font size="5" color="" style="cursor:pointer;align:left; font-family:'Comic Sans MS';">Add Jobs</font></a><br>
<a href="viewjobs.php"><font size="5" color="" style="cursor:pointer;align:left; font-family:'Comic Sans MS';">View Jobs</font></a><br>
<a href="jobstats.php"><font size="5" color="" style="cursor:pointer;align:left; font-family:'Comic Sans MS';">Job Stats</font></a><br>
</article>
<?php include("include/footer.php"); ?>
</body>
</html>