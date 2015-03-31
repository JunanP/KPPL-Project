<?php
session_start();
include('../db_connect.php');
$table = "comment_list";
$connect = new mysqli($host,$user,$pass,$db_name);

$commentbox=$_POST['commentbox'];
$rating=$_POST['rating'];
$Submit=$_POST['Submit'];
$name=$_SESSION['name'];

if($Submit) {
	if(strlen($commentbox)<10) {
		$_SESSION['errorcomment']="Comment must not less than 10 character";
		$_SESSION['error']=5;
	}
	elseif(strlen($commentbox)>500) {
		$_SESSION['errorcomment']="Comment is too long";
		$_SESSION['error']=5;
	}
	else $insertdata=mysql_query("INSERT INTO $table VALUES ('$name','$commentbox','$rating')");
}
if($_SESSION['error']='5') {
	header("location:write_comment.php");
}
else header("location:checkpost.php")
?>