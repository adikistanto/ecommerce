<html>
	<head>
	<?php require_once ("db_connect.php");
		session_start();
		
		if(!isset($_SESSION['idpelanggan'])){
			die("Anda Belum Register");
		}
		$idpelanggan=$_SESSION['idpelanggan'][0];
		$con = new mysqli($db_host, $db_user, $db_pass,$db_name);
			if ($con->connect_errno){
				die ("Could not connect to the database: <br />". mysqli_connect_error( ));
				}
			//Asign a query
			$query = " SELECT * FROM kategori";
			// Execute the query
			$result = $con->query($query);
			if (!$result){
				die ("Could not query the database: <br />". mysqli_error($con));
			}
			// Fetch and display the results
	?>
	<title>E-Commerce</title>
	<link href="assets/global.css" rel="stylesheet">
	</head>
	<body>
		<center>
		<div id="wrapper">
			<div id="header">
				<img class="logo" src="Shopping_Cart.png"/><h2>Toko Lengkap</h2>
			</div>
			<div id="navigasi">
				<div class="form_cari">
					<form>
						<input class="input_form" type="text" name="input_cari" placeholder="masukan kata kunci"/>
						<input class="submit_form" type="submit" value="cari" name="submit_cari">
					</form>
				</div>
				<div class="tombol"><a href="keranjang.php">Keranjang</a></div>
				<div class="tombol"><a href="detail_pesanan.php">Konfirmasi</a></div>
				<div class="tombol"><a href="riwayat_pembelian.php">Riwayat Pembelian</a></div>
				<div class="tombol"><a href="logout.php">Logout</a></div>
				<h2>Selamat berbelanja, 
				<?php 
				$query1="SELECT * FROM pelanggan WHERE idpelanggan=$idpelanggan";
				$result1 = $con->query($query1);
						if (!$result1){
							die ("Could not query the database: <br />". mysqli_error($con));
						}
				$row1 = $result1->fetch_array();
				echo $row1['nama'];?>
				
				</h2>
			</div>
			<div id="isi">
				<div class="isi_1">
					<?php 
					while ($row = $result->fetch_array()){
					echo '<div class="isi_1_1"><a href="list_perkategori.php?idkategori='.$row['idkategori'].'"><img class="gambar_detail" src="'.$row['file_gambar'].'"/></a><br><br><a href="list_perkategori.php?idkategori='.$row['idkategori'].'">'.$row['nama'].'</a></div>';
					}?>
				</div>
			</div>
			<div id="kaki">
				<br><br><br><center>&copy IF_UNDIP</center>
			</div>
		</div>
		</center>
	</body>
</html>