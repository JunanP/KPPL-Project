<?php
session_start();
if($_SESSION['error']=='1') {
	echo "Invalid Username or Password";
	$_SESSION['error']=0;
}
if($_SESSION['error']=='4') {
	echo "Please login first";
}
?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="do_login.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td><a href="forgotpass.php">Forgot Password?</a></td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>


<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form2" method="post" action="register.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Registration Form </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="newuser" type="text" id="newuser"></td>
<td>
<?php
if($_SESSION['error']=='2') {
	echo $_SESSION['erroruser'];
}
?>
</td>
</tr>
<tr>
<td>Name</td>
<td>:</td>
<td><input name="newname" type="text" id="newname"></td>
<td >
<?php
if($_SESSION['error']=='2') {
	echo $_SESSION['errorname'];
}
?>
</td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="newemail" type="text" id="newemail"></td>
<td >
<?php
if($_SESSION['error']=='2') {
	echo $_SESSION['errormail'];
}
?>
</td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="newpassword" type="password" id="newpassword"></td>
<td >
<?php
if($_SESSION['error']=='2') {
	echo $_SESSION['errorpassword'];
}
?>
</td>
</tr>
<tr>
<td>Reinput Password</td>
<td>:</td>
<td><input name="renewpassword" type="password" id="renewpassword"></td>
<td >
<?php
if($_SESSION['error']=='2') {
	echo $_SESSION['passnotmatch'];
}
?>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Register" value="Submit"></td>
<td >
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="../headlogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;</td>
<td><input type="submit" name="Submit" value="Back"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>