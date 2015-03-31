<?php
session_start();
ob_start();
include('../db_connect.php');
$table = "member_list";

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$sql="SELECT * FROM $table WHERE username='$myusername' && password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){

$_SESSION['name']=$myusername;
if($_SESSION['error']=='4') {
	header("location:../comment/write_comment.php");
}
else
header("location:../headlogin_userin.php");
}	
else {
$_SESSION['error']='1';
header('location:login&signup.php');
}
ob_end_flush();
?>