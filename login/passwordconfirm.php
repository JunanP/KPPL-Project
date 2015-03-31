<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="login&signup.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Hi </strong>
<?php
session_start();
echo $_SESSION['name'];
?>
<strong>, Your password is</strong>
<?php
echo $_SESSION['password'];
?>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Back to Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>