<?php
session_start();
if(strlen($_SESSION['name'])<4) {
	$_SESSION['error']=4;
	header("location:../login/login&signup.php"); }
?>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="comment.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Test Write Comment</strong></td>
</tr>
<tr>
<td width="78">Your Comment</td>
<td width="6">:</td>
<td width="294"><textarea name="commentbox" id="commentbox" rows="5" cols="50"></textarea></td>
<td >
<?php
if($_SESSION['error']=='5') {
	echo $_SESSION['errorcomment'];
}
?>
</td>
</tr>
<tr>
<td >Rating</td>
<td >:</td>
<td ><select name="rating" id="rating">
<option value=0.5>0.5</option>
<option value=1>1</option>
<option value=1.5>1.5</option>
<option value=2>2</option>
<option value=2.5>2.5</option>
<option value=3>3</option>
<option value=3.5>3.5</option>
<option value=4>4</option>
<option value=4.5>4.5</option>
<option value=5>5</option>
</select></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Post"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
