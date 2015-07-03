<!DOCTYPE html>
<?php
	require_once('db_login.php');
	session_start();
	$idpelanggan=$_SESSION['idpelanggan'][0];
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

	$query = "SELECT * FROM penjualan, status_penjualan, kota, provinsi WHERE idpelanggan='".$idpelanggan."' and idstatus=0 and penjualan.idpenjualan=status_penjualan.idpenjualan and penjualan.idkota_kirim=kota.idkota and kota.idprovinsi=provinsi.idprovinsi";
		
	 //Execute the query
	$result = $db->query( $query );
	if (!$result){
	   die ("Could not query the database: <br>". $db->error);
	}
	//$hasil=$result->fetch_object();
?>
<html>
	<head>
		
		<title>Detail Pesanan</title>
		<link href="assets/global.css" rel="stylesheet">
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
			<div id="navigasi">
				<div class="tombol"><a href="keranjang.php">Keranjang</a></div>
			</div>
			<div id="isi">
		
				<h2>Detail pesanan</h2>
				<?php
				
				echo '<table border="1">';
				while($row=$result->fetch_Row()){
					$idpenjualan=$row[0];
					echo '<tr>';
					echo '<td colspan="4">';
					echo 'ID Penjualan= '.$row[0].'<br/>';
					
					echo 'Tangal= '.$row[2].'<br/>';
					echo '</td>';
					echo '</tr>';
					
					$query2="SELECT * FROM detail_penjualan,barang WHERE idpenjualan='".$idpenjualan."' and detail_penjualan.idbarang = barang.idbarang";
					$result2 = $db->query( $query2 );
					if (!$result2){
					   die ("Could not query the database: <br>". $db->error);
					}
					while($row2=$result2->fetch_row()){
						
						echo '<tr>';
						
						echo '<td>';
						echo '<table>';
						echo '<tr><td>';
						echo '<img src="'.$row2[9].'" width="50px" height="50px">';
						echo '</td><td>';
						echo '<b>'.$row2[6].'</b><br/>';
						echo '<small>'.$row2[3].' Barang('.$row2[12].' kg) x Rp '.$row2[11].',-</small></br>';
						echo '</td></tr>';
						echo '</table>';
						
						echo '</td>';
						echo '<td colspan="3">';
						echo '<b>Harga Barang</b><br/>';
						echo 'Rp '.$row2[4].',-<br/>';
						echo '</td>';
						echo '</tr>';
					}
					echo '<tr>';
					echo '<td>';
					echo '<b>Alamat Tujuan</b><br/>';
					echo '<small>'.$row[7].'</small><br/>';
					echo $row[8].'<br/>';
					echo $row[9].'<br/>';
					echo $row[16].'<br/>';
					echo $row[19].'<br/>';
					echo '</td>';
					echo '<td float="top">';
					echo '<b>Total Barang</b><br/>';
					echo $row[4].'('.$row[5].' kg)';
					echo '</td>';
					echo '<td>';
					echo '<b>Sub total</b><br/>';
					echo 'Rp '.$row[3].',-';
					echo '</td>';
					echo '<td>';
					echo '<b>Ongkos Kirim</b><br/>';
					$ongkir=$row[6];
					echo 'Rp '.$ongkir.',-<br/>';
					echo '</td>';
					echo '</tr>';
					$total=$row[3]+$ongkir;
					echo '<tr>';
					echo '<td colspan="4" float="right">';
					echo 'Total <b>Rp '.$total.'</b>';
					echo '</td>';
					echo '</tr>';
					echo '</table>';
					echo '<form method="POST" action="konfirm_bayar.php">';
					echo '<input type="number" name="total" value="'. $total .'" hidden>';
					echo '<input type="text" name="idpelanggan" value="'. $idpelanggan .'" hidden>';
					echo '<input type="text" name="idpenjualan" value="'. $idpenjualan .'" hidden><br><br>';
					echo '<input type="submit" name="konfirm" value="Konfirmasi>>">';
					echo '</form>';
				}
				?>
				</div>
				<div id="kaki">
					<br><br><center>&copy IF_UNDIP</center>
				</div>
			</div>
		</div>
		</center>	
			
	</body>
</html>