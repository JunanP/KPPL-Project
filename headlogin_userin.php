<?php
session_start();
if(strlen($_SESSION['name'])<4) {
		header("location:headlogin.php");
}
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

li.left {
    float: left;
	width: 120px;
}
li.right {
	float: right;
	width: 150px;
}
div.img {
	margin-top:40px;
}

a.head:link, a:visited {
    display: block;
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
  <li class="left"><a class="head" href="default.asp">Home</a></li>
  <li class="left"><a class="head" href="wisata/listwisata.php">Tempat Wisata</a></li>
  <li class="left"><a class="head" href="contact.asp">Contact</a></li>
  <li class="right"><a class="head" href="login/logout.php">Logout</a></li>
  <li class="right"><a class="head" href="myprofile.php">Welcome, 
  <?php
  echo $_SESSION['name'];
  ?>
  </a></li>
</ul>
<div class="img">
  <a target="_blank" href="klematis_big.htm">
    <img src="klematis_small.jpg" alt="Klematis" width="110" height="90">
  </a>


</head>
<body>
</body>
</html>