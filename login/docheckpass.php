<?php
session_start();
ob_start();
include('../db_connect.php');
$table = "member_list";
$conn = new mysqli ($host, $user, $pass, $db_name);

$checkusername=$_POST['checkuser'];
$email=$_POST['checkmail'];

$sql="SELECT password FROM $table WHERE username='$checkusername' && email='$email'";
$result=$conn->query($sql);
$row = $result->fetch_assoc();
$count = $result->num_rows;

if($count==1){

$_SESSION['name']=$checkusername;
$_SESSION['password']=$row["password"];

header("location:passwordconfirm.php");
}
else {
$_SESSION['error']='1';
header('location:forgotpass.php');
}
ob_end_flush();
?>