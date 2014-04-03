<?php
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_SESSION['user_name'])) {
$user_name=$_SESSION['user_name'];
}else{
$user_name="guest";
}
?>
<div id="header_container">
<form action="" method="post" name="test" id="test">
   <p class="alignleft"> <font style="font-family:'Comic Sans MS';font-size:50px;cursor:pointer;margin-top:-10%;" class="alignleft"><a href="index.php" style="font-size:50px;cursor:pointer;">puppig</a></font></p>
	
	   <?php if($user_name=="guest"){
	   ?>
	  <p class="alignright"><a href="" style="text-decoration:underline !important;padding:5px;"><font size="" color="" style="font-family:comic sans ms;font-size:20px;"><?php echo $_SESSION['user_name']?></font>	
      <a href="logout.php" class="vpb_general_button"><font size="" color="" style="font-family:comic sans ms;" >logout</font></a></p>
      <?php }else{?>
	 	  <p style="margin-top:0.5%;margin-left:60%;" class="alignright"><a href="javascript:void(0);"class="vpb_general_button" onClick="vpb_show_sign_up_box();" ><font size="" color="" style="font-family:'comic sans ms';">signin/signup</font></a></p>
	  <?php }?>
	 </form>
    </div>