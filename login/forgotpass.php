<?php
session_start();
if($_SESSION['error']=='1') {
	echo "Invalid Username or Email";
	$_SESSION['error']='0';
}
?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="docheckpass.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Forgot Password</strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="checkuser" type="text" id="checkuser"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="checkmail" type="text" id="checkmail"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Register"></td>
<td><a href="login&signup.php">Back to Login</a></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
