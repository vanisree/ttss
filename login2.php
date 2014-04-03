<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("include/connect.php");
$choice=$_POST['RadioGroup1'];
$user_name=$_POST['user_name']; 
$password=$_POST['password']; 
$sql="SELECT count(*) FROM employer WHERE user_name='$user_name' and password='$password'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)) {
	echo $row[0];
	if($row[0]>0){
	    $_SESSION['user_name'] = $_POST['user_name'];
	}
}
?>