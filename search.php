<?php
session_start();
include("include/connect.php");
$question=$_GET['question'];
if(isset($_POST['search']))
{
//print_r($_POST);
$question=$_POST['question'];
$result=mysql_query("SELECT * FROM search where  keyword LIKE '%$question%' or location like '%$question%' or description like '%$question'");
//echo "SELECT * FROM members_registration WHERE name LIKE '%$question%'";
//exit;
if($row=@mysql_fetch_array($result)) 
  {
  header("location:search1.php?question=".$question."&&action=displaydetails");
  }else
  {
  header("location:search2.php?result=nodetails");
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Search Page:</title>




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
<style>
.font_family{
font-family:comic sans ms;
font-size:15px;
font-weight:bold;
}
</style>
</head>
<body>
<!-- Sign-up and Login Links Starts Here -->
<?php include("include/header.php"); ?>
<br clear="all" />
<!-- Sign-up and Login Links Ends Here -->
<!-- Code Begins -->

<div id="vpb_pop_up_background"></div><!-- General Pop-up Background -->
<!-- Sign Up Box Starts Here -->
<?php include("include/popup.php"); ?>
<div id="container">
    <div id="content">
	<div align="center" class="grid_full">
	
	<div id="horizontalmenu">
        <ul class="menu">
            <li> <a href="#"><font size="5" color="#000000" style="font-family:comic sans ms;">include</a><img src="images/2.png" width="30" height="20" border="0" alt="">
                <ul class="sub-menu">
                    <li class="font_family"><INPUT NAME="options" TYPE="CHECKBOX" VALUE=''>java
                    </li>
                    <li class="font_family"><INPUT NAME="options" TYPE="CHECKBOX" VALUE=''>C
                    </li>
                    <li class="font_family"><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' >.net
                    </li>
                    <li class="font_family"><INPUT NAME="options" TYPE="CHECKBOX" VALUE='' >.php
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
	</div><br>
	<?php 
	     $query = "SELECT COUNT(*) as num FROM search where  keyword LIKE '%$question%' or location like '%$question%' or description like '%$question'";
	      $total_pages = mysql_fetch_array(mysql_query($query));
	      $total_pages = $total_pages['num'];
	      ?>
		  <div><p><?php echo $total_pages?>&nbsp;jobs found</div>
		  <?php
		  if($total_pages>0){
	      $query = "SELECT COUNT(*) as num FROM search where keyword='$question'";
	      $total_pages = mysql_fetch_array(mysql_query($query));
	      $total_pages = $total_pages['num'];
	      ?>
		  
		  <?php
		   if($total_pages>0){
		   $result = mysql_query("SELECT * FROM search where  keyword LIKE '%$question%' or location like '%$question%' or description like '%$question'");
		   if($result)
		 {?>
		 <div class="table"  >
			<center><table width="75%" rules=cols style="border:1px solid #c0c0c0; >
			<tr align="center" bgcolor="#a0a0a0" >
				<th  width="40%" height="50px" style="font-family:comic sans ms;"><font size="4" color="">Job Title</font></th>
				<th  width="20%" height="50px" style="font-family:comic sans ms;"><font size="4" color="">Company</font> </th>
				<th  width="20%" height="50px" style="font-family:comic sans ms;"><font size="4" color="">location</font></th>
				<th  height="50px" style="font-family:comic sans ms;"><font size="4" color="">Date posted</font></th>
			</tr>
			</table></center>
			
		  <?php while($row = mysql_fetch_array($result))
		  {?>
		    
			<center><table width="75%"  cellpadding="0" cellspacing="0" style="border:1px solid  #efefef;">
			<tr align="center" height="50px" bgcolor="#f7f7f7">
				<td width="40%"><a class="job_link" href='<?php echo   $row['title'] ; ?>'><?php echo   $row['title'] ; ?></a></td>
				<td width="20%"><font size="3" color=""><?php echo   $row['description'] ; ?></font></td>
				<td width="20%"><font size="3" color=""><?php echo   $row['location'] ;?></font></td>
				<td><font size="3" color=""><?php echo   
				$row['date'] ; 
				?></font></td>	
			</tr>
			</table></center>
			<?php
		  }
		 }
		  else
			 {
		  echo   "fail";
		  }}
			?>
			</div>
			</div>
</div>
</div>
			 <?php include("include/footer.php"); ?>
</body>
</html>