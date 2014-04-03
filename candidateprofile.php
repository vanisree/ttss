<?php
include("include/connect.php");
session_start();
$user_name=$_SESSION['user_name'];
$sql="SELECT * FROM users WHERE user_name='$user_name' ";
$result=mysql_query($sql);
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <script type="text/javascript">
cxzcxzc
function handleSelection(choice) {
document.getElementById('select');
document.getElementById(choice).style.display="block"
}
</script>
<head>
<link href="css/flat-ui.css" rel="stylesheet">
<style type="text/css">
.alignCenter {
	text-align: center;
}
.hide{
display:none;
}
{
   background-color: #DCDCDC;
   color: #000000;
   font-family: Arial;
   font-size: 13px;
   margin: 0;
   padding: 0;
}
</style>
    <style>
    $green: #A3CD99
$darkgreen: #579E81


.slider {
  width: 100%
  margin: 50% auto
}
input[type="range"]{
  -webkit-appearance: none !important /*Needed to reset default slider styles */
  width: 100%
  height: 15px
  background:
    color: $green
  border: 1px solid darken($green, 4%)
    radius: 10px
  margin: auto
  transition: all 0.3s ease
  }
   
  &:hover 
    background-color: lighten($green, 5%)
  
  &:active + #rangevalue /*Here to do something to the value while moving the slider */

  
input[type="range"]::-webkit-slider-thumb 
  -webkit-appearance: none !important  
  width: 20px
  height: 20px
  background:
    color: $darkgreen
  border:
    radius: 30px
  box-shadow: 0px 0px 3px darken($darkgreen, 15%)
  transition: all 0.5s ease

  
  &:hover
    background:
      color: darken($darkgreen, 10%)  
  
  &:active
    box-shadow: 0px 0px 1px darken($darkgreen, 15%)


#rangevalue{
  text-align: center
  font:
    family: 'Quantico', sans-serif
    size: 18px
  display: block
  margin: auto
  padding: 10px 0px 
  width: 100%
  color: $darkgreen 
}
 
   </style>
  <title>.:Puppig:.</title>
 </head>
 <body>
 <?php include("include/header.php"); ?>
<!-- END: Sticky Header -->
 
<!-- BEGIN: Page Content -->
<div id="container">
    <div id="content">
	
<?php	while($row = mysql_fetch_array($result)) {

?>
<div id="layer" style="height:100%;">
		<div class='formElements'>
	<div style="comic sans ms">
	 <center><font size="5" color="" style="font-family:comic sans ms;" >name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user_name" id="user_name" class="font_family box3" size="20" value='<?php echo $_SESSION['user_name']?>' readonly/></font><div></div><br>
	 <font size="5" color="" style="font-family:comic sans ms;">phone number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="phone_number" id="phone_number" class="font_family box3" size="20" value='<?php echo $row['phone_number'];?>'/></font></div><br></center>
	 <center><font size="5" color=""style="font-family:comic sans ms;">email:&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email" class="font_family box3" size="45" value='<?php echo $row['email'];?>'/></font></div><div></div><br>
	 </center>
	 <?php }?>
	 
	 <div class='formElements'>
	<center><font size="5" color="" style="font-family:comic sans ms;">programming languages:</font>
<select id="select" onChange="handleSelection(value)" name="technology">
<option selected>please select one </option>
<?php
$query = mysql_query("SELECT DISTINCT Technology  FROM `skill` where Category='pl' ");
while($row = mysql_fetch_assoc($query)){
	
  echo '<option value="div1" name="'.$row['Technology'].' " id="val" >'.$row['Technology']. '</option>';
  }
  
?>
</select><div></div><br>

<div class="hide" id="div1">

<?php $sql="SELECT Type FROM skill WHERE Technology='$dropdown'";

$result=mysql_query($sql);
if($row=@mysql_fetch_array($result))
{echo "hi";
}
else{
echo "bye";
}
while ($row = mysql_fetch_row($result)) { ?>

       <INPUT NAME="options" TYPE="CHECKBOX" VALUE=' <?php echo $row[1]; ?>' ><?php echo $value1[1]; ?> <INPUT NAME="options" TYPE="CHECKBOX" VALUE=' <?php echo $value1[1]; ?>' ><?php echo $value1[1]; ?> <INPUT NAME="options" TYPE="CHECKBOX" ' <?php echo $value1[1]; ?>' ><?php echo $value1[1]; ?> <INPUT NAME="options" TYPE="CHECKBOX" VALUE=' <?php echo $value1[1]; ?>'><?php echo $value1[1]; ?> <br />
<?php } ?>
<!--<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value1"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>-->


<div></div><br>
</div>
<font size="5" color="" style="font-family:comic sans ms;">databases:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select id="select" onChange="handleSelection(value)">
<div class="hide">
<option selected>please select one </option>
</div>
<?php
$query = mysql_query("SELECT * FROM `skill` where Category='db' ");
while($row = mysql_fetch_assoc($query)){
echo '<option value="div3">' . $row['Technology'] . '</option>';
}
?>
</select><div></div><br>
<div class="hide" id="div3">
 <!--<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<br />
Rating:<input type="text" style="width: 100px;" value="" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input></br>
</div>-->
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value1"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>

</div>
<div></div><br>
<font size="5" color="" style="font-family:comic sans ms;">scripting languages:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select id="select" onChange="handleSelection(value)">
<option selected>please select one </option>
<?php
$query = mysql_query("SELECT * FROM `skill` where Category='sl' ");
while($row = mysql_fetch_assoc($query)){
echo '<option value="div5">' . $row['Technology'] . '</option>';
}
?>
</select><div></div><br>
<div class="hide" id="div5">
 <!--<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<br />
Rating:<input type="text" style="width: 100px;" value="" class="alignCenter" readonly ></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input></br>-->
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value1"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
</div><div></div><br>
<font size="5" color="" style="font-family:comic sans ms;">frame works:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<select id="select" onChange="handleSelection(value)" >
<option selected>please select one </option>
<?php
$query = mysql_query("SELECT * FROM `skill` where Category='fw' ");
while($row = mysql_fetch_assoc($query)){
echo '<option value="div7">' . $row['Technology'] . '</option>';
}
?>
</select><div></div><div></div><br>
<div class="hide" id="div7">
 <!--<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<INPUT NAME="options" TYPE="CHECKBOX" VALUE="o1">Option 1<br />
Rating:<input type="text" style="width: 100px;" value="" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input>&nbsp;<input type="text" style="width: 100px;" class="alignCenter" readonly></input></br>
</center>-->
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value1"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
<div class="container">
  <div class="slider">
  <font size="5" color="">technology:</font><input type="text" name="">
  <input type = "range" min="0" max="10" onchange="rangevalue.value=value"/>
	<output id="rangevalue">5</output>
  </div>
  </div>
</div>
<div>
<input type='submit' name='submit' value='submit your resume'  class='font_family box2'/><br>
</div>

	</div>
</div>	

<!-- END: Page Content -->
 
<!-- BEGIN: Sticky Footer -->
  <?php include("include/footer.php"); ?>
 </body>
</html>
