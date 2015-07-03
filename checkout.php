<!DOCTYPE html>

<?php
	include "config.php";
	session_start();
	$idpelanggan=$_SESSION['idpelanggan'][0];
	$idpenjualan=$_SESSION['transaksi'];
	mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
	mysql_select_db($DB);
?>

<script language='javascript'>
function showKota()
{
	<?php
		mysql_connect('localhost','root','') or die("Koneksi gagal");
		mysql_select_db('ecommerce') or die("Database tidak bisa dibuka");

		$query = "SELECT * FROM provinsi ORDER BY idprovinsi ASC";
		$hasil = mysql_query($query);
		while ($data = mysql_fetch_array($hasil))
		{
			$prov = $data['idprovinsi'];
			echo "if (document.form1.provinsi.value == \"".$prov."\")";
			echo "{";
			$query2 = "SELECT * FROM kota WHERE idprovinsi = '$prov' ORDER BY idkota ASC";
			$hasil2 = mysql_query($query2);
			$content = "document.getElementById('kot').innerHTML = \"";
			while ($data2 = mysql_fetch_array($hasil2))
			{
				$content .= "<option value='".$data2['idkota']."'>".$data2['nama']."</option>";
			}
			$content .= "\"";
			echo $content;
			echo "}\n";
		}
	?>
}
</script>

<html>
	<head>
		<title>Checkout</title>
		<link href="assets/global.css" rel="stylesheet">
		<style>
			table{font-family:arial;font-size:10pt}
			a{color:#990000;text-decoration:none}
			a:hover{text-decoration:underline}
			a.beli{background-color:orange;color:white;text-decoration:none}
			a.beli:hover{background-color:#75923C;color:white;text-decoration:none}
			.tombollanjut{border:black 1px solid; padding:1}
			.ukuran{font-size:10px}
			.keranjang{border-bottom:#75923C 1px solid}
		</style>
	</head>
	<body><center>
	<div id="wrapper">
			<div id="header">
				<img class="logo" src="Shopping_Cart.png"/><h2>Toko Lengkap</h2>
			</div>
			<div id="navigasi">
				<div class="tombol"><a href="#">Konfirmasi</a></div>
			</div>
			<div id="isi">
				<div class="isi1">
					<form name="form1" method='post'  id='form_combo' action="aksi_checkout.php">
					<h3>Form Alamat Pengiriman</h3>
						<table>
							<tr>
								<td>
									Nama
								</td>
								<td>
									<input type="text" name="nama" placeholder="Nama Lengkap"></input>
								</td>
							</tr>
							<tr>
								<td valign="top">
									Alamat Lengkap
								</td>
								<td>
									<textarea rows="3" size="50"  name="alamat" placeholder="Alamat Lengkap"></textarea>
								</td>
							</tr>
							<tr>
								<td>
									Provinsi
								</td>
								<td>
									<select name='provinsi' onchange='showKota()'>
										<option value="null">--Pilih Provinsi--</option>
										<?php
										$prov = mysql_query("SELECT * FROM provinsi order by idprovinsi asc");
										
										while($hasil = mysql_fetch_array($prov)){
											echo "<option value='$hasil[idprovinsi]'>$hasil[nama]</option>";
										}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									Kota
								</td>
								<td>
									<select name='kota' id='kot'>
										<option value="null">--Pilih Kota--</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									No. Handphone
								</td>
								<td>
									 <span>+62</span>
									<input size="20" pattern = "^[1-9][0-9]{0,11}" minlength="9" maxlength="20" placeholder="8123456789" name="telepon" type="number" data-required="true" data-error-message="Enter Your Telephone Number"/>
								</td>
							</tr>
							<tr>
								<td>
									Jenis Pengiriman
								</td>
								<td>
									<input type="radio" name="deliv" value="Regular" checked>Reguler</input>
									<input type="radio" name="deliv" value="Express">Express</inpur>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="lanjutkan"/>
								</td>
							</tr>
							
						</table>
					</form>
				</div>
				<div class="isi2">
					<h3>Pesanan Anda</h3>
					<table border="1">
					<tr align="center">
					<td>Kode Barang</td>
					<td>Nama Barang</td>
					<td>Jumlah</td>
					<td>Harga</td>
					</tr>
					<?php
						$keranjang = mysql_query("select  barang.nama, detail_penjualan.* from detail_penjualan, barang
						where detail_penjualan.idbarang=barang.idbarang and idpenjualan=".$idpenjualan);
						$subtotal = 0;
							while($k = mysql_fetch_array($keranjang)){
									echo "<tr>
									<td class=keranjang>".$k['idbarang']."</td><td class=keranjang>".$k['nama']."</td>";
									echo "<td class=keranjang>".$k['qty']."</td> <td align=right class=keranjang>Rp. <span id=\"harga\">".$k['harga']."</span> &nbsp;</td></tr>";
									$subtotal = $subtotal + $k['harga'];
									$s['idbarang']=$k['idbarang'];
								}
							echo "<tr><td colspan=3 align=right><b>Total</b> &nbsp;</td><td>
							<b>Rp. <span id=subtotal>$subtotal</span></b></td></tr>";
					?>
					</table>
				</div>
			</div>
			<div id="kaki">
				<br><br><center>&copy IF_UNDIP</center>
			</div>
	</div>
	
	</center>
	</body>
</html>