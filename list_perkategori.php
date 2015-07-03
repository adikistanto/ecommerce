<html>
	<head>
	<?php 
		session_start();
		require_once ("db_connect.php");
		$con = new mysqli($db_host, $db_user, $db_pass,$db_name);
						if ($con->connect_errno){
							die ("Could not connect to the database: <br />". mysqli_connect_error( ));
							}
	?>
	<title>E-Commerce</title>
	<link href="assets/global.css" rel="stylesheet">
	</head>
	<body>
		<center>
		<div id="wrapper">
			<div id="header">
				<img class="logo" src="Shopping_Cart.png"/>
			</div>
			<div id="navigasi">
				<div class="tombol"><a href="keranjang.php">Keranjang</a></div>
				<?php if (isset($_SESSION['idpelanggan'])){
					$idpelanggan=$_SESSION['idpelanggan'][0];
					echo '<div class="tombol"><a href="detail_pesanan.php">Konfirmasi</a></div> <div class="tombol"><a href="riwayat_pembelian.php">Riwayat Pembelian</a></div> <div class="tombol"><a href="logout.php">Logout</a></div>';
					echo '<h2>Selamat berbelanja,';
					$query1="SELECT * FROM pelanggan WHERE idpelanggan=$idpelanggan";
					$result1 = $con->query($query1);
							if (!$result1){
								die ("Could not query the database: <br />". mysqli_error($con));
							}
					$row1 = $result1->fetch_array();
					echo $row1['nama'].'</h2>';
				}else echo '<div class="tombol"><a href="form_login.php">Login</a></div>'  ?>
			</div>
			<div id="isi">
				<?php
					$id=$_GET['idkategori'];
					
						//Asign a query
						$query = " SELECT * FROM barang WHERE idkategori='".$id."'";
						// Execute the query
						$result = $con->query($query);
						if (!$result){
							die ("Could not query the database: <br />". mysqli_error($con));
						}
						// Fetch and display the results
				?>
				<div class="isi_1">
					<?php 
					while ($row = $result->fetch_array()){
					echo '<div class="isi_1_1"><a href="detail_produk.php?id='.$row['idbarang'].'"><img class="gambar_detail" src="'.$row['file_gambar'].'"/></a><br><br><a href="detail_produk.php?idkategori='.$row['idkategori'].'&id='.$row['idbarang'].'">'.$row['nama'].'</a><br><a href="detail_produk.php?idkategori='.$row['idkategori'].'&id='.$row['idbarang'].'">'.$row['harga'].'</div>';
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