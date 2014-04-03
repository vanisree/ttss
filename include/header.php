<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION['user_name'])) {
    $user_name="guest";
}else{
   $user_name=$_SESSION['user_name'];
}
?>
<style>
</style>
<div class="header_container" style="padding:3px;width:100%">
	<div style="" class="logo bigfont"><a href="index.php">puppig</a></div>
	<div style="" class="fields">
	    <form action="" method="post" name="test" id="test">
		<input type="text" placeholder="input.." class="box"/>
		<input type="submit" value="submit" class="box1"/>
		</form>
	</div>
	<div style="" class="information">
	    <?php if ($_SESSION["user_name"]){
	    ?>
		<span class="smallfont"><a href="#"><?php echo $user_name; ?></a></span>
        <span class="smallfont" style="margin-right:10px;"><a href="logout.php">logout</a></span>
        <?php }else {  ?>
		<span class="smallfont" style="margin-right:10px;"><a href="javascript:void(0);" class="vpb_general_button" onClick="vpb_show_sign_up_box();">signin/signup</a></span>
		<?php } ?>
      </div>
</div>