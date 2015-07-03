<!DOCTYPE html>
<?php
	require_once('db_login.php');
	session_start();
	$total=$_POST['total'];
	$idpelanggan=$_SESSION['idpelanggan'][0];
	$idpenjualan=$_SESSION['transaksi'];
	$db = new mysqli($db_host, $db_username, $db_password);

	if ($db->connect_errno){
		die ("Could not connect to the database: <br />". $db->connect_error);
		}

	$db_select = $db->select_db($db_database);
	if (!$db_select)
	{
		die ("Could not select the database: <br />". $db->error);
	}
		
	//Asign a query

	$query = "SELECT * FROM penjualan, kota, provinsi WHERE idpelanggan='".$idpelanggan."' and penjualan.idkota_kirim=kota.idkota and kota.idprovinsi=provinsi.idprovinsi";
		
	 //Execute the query
	$result = $db->query( $query );
	if (!$result){
	   die ("Could not query the database: <br>". $db->error);
	}
	//$hasil=$result->fetch_object();
	if(isset($save)){
		echo 'OKE';
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="konfirm bayar.css">
		<link href="assets/global.css" rel="stylesheet">
		<title>Konfirmasi Pembayaran</title>
		<style>
		table{border:2px; padding:10px}
		td{border: solid 2px #FFCC00;padding:10px;}
		</style>
	</head>
	<body>
		<center>
		<div id="wrapper">
			<div id="header">
				<img class="logo" src="Shopping_Cart.png"/><h2>Toko Lengkap</h2>
			</div>
			<div id="isi">
		
				<h2>Konfirmasi Pembayaran</h2>
				
				<form method="POST" action="proses.php" enctype="multipart/form-data">
					<table frame="void">
					<tr>
						<td>Nama Bank</td>
						<td>
						: <input type="text" name="namabank" placeholder="Masukkan nama bank" required>
						</td>
					</tr>
					<tr>
						<td>No Rekening</td>
						<td>
						: <input type="text" name="norekening" placeholder="Masukkan no rekening" required>
						</td>
					</tr>
					<tr>
						<td>Nama Rekening</td>
						<td>
						: <input type="text" name="namarekening" placeholder="Masukkan nama rekening" required>
						</td>
					</tr>
					<tr>
						<td>Total bayar</td>
						<td>
						: <input type="text" name="totalbayar" value="<?php echo $total; ?>" required>
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
							<label for="userfile">Upload struk:</label>
							<input type="file" name="file" id="file" required/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="idpenjualan" value="<?php echo $idpenjualan; ?>" hidden>
							<input type="text" name="idpelanggan" value="<?php echo $idpelanggan?>" hidden>
							<input type="submit" name="save" value="SUBMIT">
						</td>
					</tr>
					</table>
				</form>
			</div>
			<div id="kaki">
				<br><br><center>&copy IF_UNDIP</center>
			</div>
		</div>
		</center>
	</body>
</html>