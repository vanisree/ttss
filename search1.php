<?php
session_start();
include("include/connect.php");
$question=$_GET['question'];
if(isset($_POST['search']))
{
//print_r($_POST);
$question=$_POST['question'];
$result=mysql_query("SELECT * FROM search where  keyword LIKE '%$question%'");
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
<title>::Search Page::</title>
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
#vpb_inlude_box ul li{
 display:inline;
 }
 .shadow{
 width: 10px;
background: -moz-linear-gradient(left,rgba(220,220,220,0) 0,rgba(220,220,220,1) 100%);
background: -webkit-gradient(linear,left top,right top,color-stop(0%,rgba(220,220,220,0)),color-stop(100%,rgba(220,220,220,1)));
background: -webkit-linear-gradient(left,rgba(220,220,220,0) 0,rgba(220,220,220,1) 100%);
background: -o-linear-gradient(left,rgba(220,220,220,0) 0,rgba(220,220,220,1) 100%);
background: -ms-linear-gradient(left,rgba(220,220,220,0) 0,rgba(220,220,220,1) 100%);
background: linear-gradient(left,rgba(220,220,220,0) 0,rgba(220,220,220,1) 100%);
}
.frame{
padding: 30px 10px 10px 10px;
vertical-align: top
}
.btn{
zoom: 1;
vertical-align: baseline;
cursor: pointer;
text-align: center;
text-decoration: none;
font-weight: 500;
text-shadow: 0 1px 0 rgba(0,0,0,.2);
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0 3px 0 rgba(0,0,0,.2);
-moz-box-shadow: 0 3px 0 rgba(0,0,0,.2);
box-shadow: 0 3px 0 #ddd;
font-size: 16px;
padding: .5em 1.2em;
border: 1px solid transparent;
margin: 0;
overflow: visible;
}
.btn button{
border-radius: 3px;
background: #45aad6;
background: -webkit-gradient(linear,left top,left bottom,from(#45aad6),to(#2387c1));
background: -moz-linear-gradient(top,#45aad6,#2387c1);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#45AAD6',endColorstr='#2387C1');
margin: 0;
cursor: pointer;
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
	 <div id="layer">
	  <ul>
	     <li><a href="javascript:void(0);" onClick="vpb_show_include_box();">include <img src="images/2.png" width="30" height="20" border="0" alt=""><a></li>
		 <li><a href="javascript:void(0);" onClick="vpb_show_exclude_box()">exclude <img src="images/2.png" width="30" height="20" border="0" alt=""></a></li>
	  </ul>
	  </div>
	  <div id="vpb_inlude_box">
	       <form>
	       <table>
		       <tr>
			      <td rowspan="2" style="width:130px;vertical-align:top;padding:10px;">
				     <div>
					   <a>Include</a>
					 </div>
					 <div>
					   <a>Exclude</a>
					 </div>
					 <div>
					   <a>Exclude</a>
					 </div>
					  <div>
					   <a>Location</a>
					 </div>
				  </td>
				  <td class="shadow" rowspan="2"></td>
				  <?php $entities=mysql_query("select clude from search where keyword LIKE '%$question%' limit 1");
				       while($entite_row = mysql_fetch_array($entities))
					  {
					    $fields=$entite_row['clude'];
					  }
					  $words = explode(" ", $fields);
					  $count_words=count($words);
					  $repeat_loop= floor ($count_words/4);
					  $remainder=$count_words%4;
					 // echo $count;
					  $start=0;
					  $end=4;
					  $k=0;
					  for($j=0;$j<$repeat_loop;$j++){
					  ?>
					 <td>
					  <?php
					  for($i=$start;$i<$end;$i++){
			    ?>
			    <div id="inclu1_<?php echo   $words[$i]; ?>">
			   <a>
			    <label>
				 <INPUT NAME="inclu_options" TYPE="CHECKBOX" class="inclu_options" VALUE='inclu_<?php echo   $v ; ?>' id="inclu_<?php echo   $words[$i] ; ?>">
				 <span><?php echo   $words[$i] ?></span>
				</label>
			 </a>
			 </div>
			<?php }
			     $k=1;
			     $start= ($j+$k) * 4;
				 $end=($j+($k+1)) *4;
			 ?>
				  </td>
				  <?php }?>
				  <td>
				     <?php for($i=$start;$i<($start+$remainder);$i++){
					 ?>
				     <div id="inclu1_<?php echo   $words[$i]; ?>">
			        <a>
			       <label>
				   <INPUT NAME="inclu_options" TYPE="CHECKBOX" class="inclu_options" VALUE='inclu_<?php echo   $v ; ?>' id="inclu_<?php echo   $words[$i] ; ?>">
				  <span><?php echo   $words[$i] ?></span>
				 </label>
			 </a>	 
				   <?php }?>
				   </td>
			   </tr>
			   <tr><td style="padding:10px;">
			   <span style="flaot:right;"><button type="">Go</button></span><button type="">Cancel</button></td></tr>
			   <!--<?php echo $count_words.$repeat_loop.$end.$start.$remainder?>-->
		   </table>
		   </form>
		</div>
	  <div id="vpb_exclude_box">
		    <?php $entities=mysql_query("select clude from search where keyword LIKE '%$question%' limit 1");
				       while($entite_row = mysql_fetch_array($entities))
					  {
					    $fields=$entite_row['clude'];
					  }
					  $words = explode(" ", $fields);
					  foreach($words as $v){
			 ?>
			 <div id="exclu1_<?php echo   $v ; ?>">
			   <a>
			    <label>
				 <INPUT NAME="exclu_options" TYPE="CHECKBOX" class="exclu_options" VALUE='exclu_<?php echo   $v ; ?>' id="exclu_<?php echo   $v ; ?>">
				 <span><?php echo   $v ?></span>
				</label>
			 </a>
			 </div>
			<?php }?>
		</div>
	<?php 
	       $query = "SELECT COUNT(*) as num FROM search where keyword LIKE '%$question%'";
	      $total_pages = mysql_fetch_array(mysql_query($query));
	      $total_pages = $total_pages['num'];
	      ?>
		  <div style="margin-left:48%;font-size:20px;font-family:comic sans;"><p><?php echo $total_pages?>&nbsp;jobs found</div>
		  <?php
		  if($total_pages>0){
		  $result = mysql_query("SELECT * FROM search where  keyword LIKE '%$question%'");
		 if($result)
		 {?>
		 <div class="table"  >
			<center><table width="75%" rules=cols style="border:1px solid #c0c0c0; >
			<tr align="center" bgcolor="#a0a0a0" >
				<th  width="40%" height="50px" style="font-family:comic sans ms;"><font size="4" color="">job title</font></th>
				<th  width="20%" height="50px" style="font-family:comic sans ms;"><font size="4" color="">company</font> </th>
				<th  width="20%" height="50px" style="font-family:comic sans ms;"><font size="4" color="">location</font></th>
				<th  height="50px" style="font-family:comic sans ms;"><font size="4" color="">date posted</font></th>
			</tr>
			</table></center>
			
		  <?php while($row = mysql_fetch_array($result))
		  {?>
			<center><table width="75%"  cellpadding="0" cellspacing="0" style="border:1px solid #efefef;">
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
		  }
			}?>
			</div>
			</div>
</div>
<?php include("include/footer.php"); ?>
</body>
</html>