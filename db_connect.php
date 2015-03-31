<?php
$host = "localhost";
$user = "admin_wisata";
$pass = "admin";
$db_name = "wisata_surabaya";
$connect = mysql_connect($host,$user,$pass) or die("Fail to connect");
$get_db = mysql_select_db($db_name) or die("No database");
?>