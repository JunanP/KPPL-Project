<?php
session_start();
$host = "localhost";
$user = "admin_wisata";
$pass = "admin";
$db_name = "wisata_surabaya";
$table = "comment_list";
$connect = new mysqli($host,$user,$pass,$db_name);

if($connect->connect_error) {
	die("Connection Error: " . $connect->connect_error);
}
$commentbox=$_POST['commentbox'];

$sql = $connect->prepare("INSERT INTO $table(username, comment) VALUES (?,?)");
$sql->bind_param("ss",$_SESSION['name'],$commentbox);

$_SESSION['name']="lien";
$sql->execute();

?>