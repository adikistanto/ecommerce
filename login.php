<?php
	//memulai session
	session_start();
	//cek adanya session, jika session sudah ada maka diarahkan ke index.php
	if (ISSET($_SESSION['username'])){
		header("location: index.php");
	}
?>
<style type="text/css">
	<!--
	.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #FFFFFF;
	}
	.style5 {color: #FFFFFF}
	.style9 {color: #000000; font-weight: bold; }
	.style10 {color: #000000}
	-->
</style>
 
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="cek.php">
	<p>&nbsp;</p>
	<table width="329" border="0" align="center" cellpadding="0" cellspacing="2"> 
		<tr>
			<td height="44" colspan="4" bgcolor="#999999"><div align="center">CYBER LOG-IN </div></td>
		</tr>
		<tr>
			<td width="10">&nbsp;</td>
			<td width="133"><span> User Name </span></td>
			<td width="6"><span>:<span>:</span></span></td>
			<td width="306"><input name="username" type="text" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><span>Password</span></td>
			<td><span>:<span>:</span></span></td>
			<td><input name="password" type="password" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input name="submit" value="Login" type="submit" /></td>
		</tr>
		
	</table>
</form>
<p>&nbsp;</p>