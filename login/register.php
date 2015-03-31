<?php
session_start();
ob_start();
include('../db_connect.php');
$table = "member_list";
$conn = new mysqli ($host, $user, $pass, $db_name);

$sql="SELECT username FROM $table";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$count = $result->num_rows;
$row["username"];

$newuser=$_POST['newuser'];
$newpassword=$_POST['newpassword'];
$newemail=$_POST['newemail'];
$newname=$_POST['newname'];
$renewpassword=$_POST['renewpassword'];
$Register=$_POST['Register'];
$_SESSION['error']=0;

if($Register) {
	if($newuser=="") {
		$_SESSION['erroruser']="Username cannot be empty";
		$_SESSION['error']=2;
	}
	elseif(strlen($newuser)>0 && strlen($newuser)<4) {
		$_SESSION['erroruser']="Username less than 3";
		$_SESSION['error']=2;
	}
	elseif(strlen($newuser)>15) {
		$_SESSION['erroruser']="Username more than 15";
		$_SESSION['error']=2;
	}
	elseif ($newuser==$row["username"]) {
		$_SESSION['erroruser']="Username is not available";
		$_SESSION['error']=2;
	}
	else $_SESSION['erroruser']="";
	if($newemail=="") {
		$_SESSION['errormail']="Email cannot be empty";
		$_SESSION['error']=2;
	}
	elseif(strlen($newemail)>50) {
		$_SESSION['errormail']="Email is too long";
		$_SESSION['error']=2;
	}
	else $_SESSION['errormail']="";
	if($newname=="") {
		$_SESSION['errorname']="Name cannot be empty";
		$_SESSION['error']=2;
	}
	elseif(strlen($newname)>50) {
		$_SESSION['errorname']="Name is too long";
		$_SESSION['error']=2;
	}
	else $_SESSION['errorname']="";
	if($newpassword=="") {
		$_SESSION['errorpassword']="Password cannot be empty";
		$_SESSION['error']=2;
	}
	elseif(strlen($newpassword)>0 && strlen($newpassword)<6) {
		$_SESSION['errorpassword']="Password is less than 6";
		$_SESSION['error']=2;
	}
	elseif(strlen($newpassword)>12) {
		$_SESSION['errorpassword']="Password is more than 12";
		$_SESSION['error']=2;
	}
	else $_SESSION['errorpassword']="";
	if($renewpassword=="") {
		$_SESSION['passnotmatch']="This cannot be empty";
		$_SESSION['error']=2;
	}
	elseif (strlen($renewpassword)>1 && $renewpassword!=$newpassword) {
		$_SESSION['passnotmatch']="Password is not match";
		$_SESSION['error']=2;
	}
	else $_SESSION['passnotmatch']="";
	if($_SESSION['error']=='0') {
			$insertdata=mysql_query("INSERT INTO $table VALUES ('','$newuser','$newpassword','$newemail','$newname')");
		}
	}


if($_SESSION['error']=='2') {
	header('location:login&signup.php');
}
else header('location:registerdone.php');
ob_end_flush();
?>