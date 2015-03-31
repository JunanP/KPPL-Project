<?php
session_start();
$_SESSION['error']=0;
$_SESSION['name']="";
	header("location:headlogin.php");
?>