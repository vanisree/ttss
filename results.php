<?php
session_start();
include("config.php");
if (!isset($_SESSION['user_name'])) {
header('Location: signin.php');
}
$question=$_GET['question'];
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
  header("location:results.php?result=nodetails");
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
	<div align="center" class="grid_full">
	<div id="horizontalmenu">
        <center><ul class="menu">
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
			</ul></center>
	</div><br/>
	<form action="" method="post" name="test" id="test">
	<?php 
	      $query = "SELECT COUNT(*) as num FROM search where keyword='$question'";
	      $total_pages = mysql_fetch_array(mysql_query($query));
	      $total_pages = $total_pages['num'];
	      
		  if($total_pages>0){?>
	<?php $result = mysql_query("SELECT * FROM resume where  skills='$question'");;
		 if($result)
		 {?>
		 <div class="table"  >
			<center><table width="75%" rules=cols style="border:1px solid #c0c0c0; >
			<tr align="center" bgcolor="#a0a0a0" >
				<th width="30%" height="50px" style="font-family:comic sans ms;"><font size="5" color="">candidate name</font></th>
				<th width="15%" height="50px" style="font-family:comic sans ms;"><font size="5" color="">experience</font> </th>
				<th width="30%" height="50px" style="font-family:comic sans ms;"><font size="5" color="">phone number</font></th>
				<th width="30%" height="50px" style="font-family:comic sans ms;"><font size="5" color="">email id</font></th>
			</tr>
			</table></center>		
		  <?php while($row = mysql_fetch_array($result))
		  {?>
		  <center><table width="75%"  cellpadding="0" cellspacing="0" style="border:1px solid #c0c0c0;">
			<tr align="center" height="50px" bgcolor="#f7f7f7">
			<td width="30%" ><font size="3" color=""><?php echo   $row['candidate_name'] ; ?></font></td>
				<td width="10%" ><font size="3" color=""><?php echo   $row['experience'] ; ?></font></td>
				<td width="30%" ><font size="3" color=""><?php echo   $row['phone_number'] ;?></font></td>
				<td width="30%" ><font size="3" color=""><?php echo   $row['email'] ; ?></font></td>
			</tr>
			</table></center>
		  
			
		 <?php }
		 }} ?>
	</div>
</div>

<!-- END: Page Content -->
 
<!-- BEGIN: Sticky Footer -->
<?php include("include/footer1.php"); ?>

 </body>
</html>
