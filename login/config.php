<?php
session_start();
ob_start();
$host = "localhost";
$user = "admin_wisata";
$pass = "admin";
$db_name = "wisata_surabaya";
$table = "member_list";
$connect = mysql_connect($host,$user,$pass) or die("Fail to connect");
$get_db = mysql_select_db($db_name) or die("No database");

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$sql="SELECT * FROM $table WHERE username='$myusername' && password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){

$_SESSION['name']=$myusername;
header("location:congratz.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>