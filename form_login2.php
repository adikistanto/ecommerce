<?php 
	session_start();
?>
<html>
	<head>
		<title>Form Login User System</title>
		<link href="assets/global.css" rel="stylesheet">
	</head>
	<body>
		<center>
		<div id="wrapper">
			<div id="header">
				<img class="logo" src="Shopping_Cart.png"/><h2>Toko Lengkap</h2>
			</div>
			<div id="isi">
					<h3 align="center"> Maaf, Anda harus login terleh dahulu..  </h3>
				<div align="center">
					<form id="login" method="post" name="login" action="periksa.php">
						<table width="286" border="0" cellpadding="2" cellspacing="2">
							<!--DWLayoutTable-->
							<tr bgcolor="#FFCC00">
								<td height="19" colspan="2" align="center" valign="middle">
								<strong><font color="#FFFFFF"><blink>LOGIN DI SINI</blink></font></strong></td>
							</tr>
							<tr>
								<td width="106" height="17">&nbsp;</td>
								<td width="180">&nbsp;</td>
							</tr>
							<tr>
								<td height="18" align="right" valign="middle"><div align="left">Nama</div></td>
								<td valign="middle">
								<input name="nama" type="text" id="nama" size="20"></td>
							</tr>
							<tr>
								<td height="18" align="right" valign="middle"><div align="left">Password</div></td>
								<td valign="middle"><input name="password" type="password" id="password" size="20" /></td>
							</tr>
							<tr>
								<td height="18" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
								<td valign="middle">
								<input name="login" type="submit" id="login" value=" Login ">
								<input type="reset" name="Reset" value="Batal" /><br></td>
							</tr>
							<tr bgcolor="#FFCC00">
								<td height="18" colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div id="kaki">
				<br><br><center>&copy IF_UNDIP</center>
			</div>
		</div>
		</center>
	</body>
</html>