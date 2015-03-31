<?php
session_start();
if(strlen($_SESSION['name'])>3) {
	header("location:listwisata_userin.php"); }
?>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: 
	hidden;
}

ul.rev {
	margin-top: 100px;
    padding: 10px;
}

li.left {
    float: left;
}
li.right {
	float: right;
}
div.img {
	margin-top:20px;
}

a:link, a:visited {
    display: block;
    width: 120px;
	height: 14px;
    font-weight: bold;
	font-family: "Lucida Console", Monospace;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #7A991A;
}
</style>
<ul>
  <li class="left"><a href="../headlogin.php">Home</a></li>
  <li class="left"><a href="listwisata.php">Tempat Wisata</a></li>
  <li class="left"><a href="contact.asp">Contact</a></li>
  <li class="right"><a href="login/login&signup.php">Login/Signup</a></li>
</ul>
<div class="img">
  <a target="_blank" href="klematis_big.htm">
    <img src="klematis_small.jpg" alt="Klematis" width="110" height="90">
  </a>


</head>
<body>
<form name="form1" method="post" action="../comment/write_comment.php">
<ul class="rev">
	<li class="left"><input type="submit" name="Submit" value="Write Review"></li>
</ul>
</form>
</body>
</html>