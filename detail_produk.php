<html>
	<head>
	<?php 
	include('cek-login.php');
	require_once ("db_connect.php");
	$idpelanggan=$_SESSION['idpelanggan'][0];
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
				<img class="logo" src="Shopping_Cart.png"/><h2 class="pesan"><?php
				$idtransaksi = $_SESSION['transaksi'];
				$query2 = "select * from detail_penjualan where idpenjualan='$idtransaksi'";
				global $pesan;
				$pesan = 0;
				$result2 = $con->query($query2);
				if (!$result2){
							die ("Could not query the database: <br />". mysqli_error($con));
				}
				while($row1 = $result2->fetch_array()){
					$pesan = $pesan + $row1['qty'];
				}
				echo $pesan;
				?> produk ditambahkan.</h2>
			</div>
			<div id="navigasi">
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
				
			</div>
			<div id="isi">
				<?php
					if(isset($_GET['id'])){
					
						$id=$_GET['id'];
						//Asign a query
						$query = " SELECT * FROM barang WHERE idbarang=".$id;
						// Execute the query
						$result = $con->query($query);
						if (!$result){
							die ("Could not query the database: <br />". mysqli_error($con));
						}
						// Fetch and display the results
						$row=mysqli_fetch_array($result);
					}
				?>
				<div class="isi_kiri">
					<img class="gambar_detail" src="<?php echo $row['file_gambar'];?>" class=""/>
				</div>
				<div class="isi_tengah">
					<p>
						<?php 
							
							echo '<b>'.$row['nama'].'</b><br/>';
							echo $row['keterangan'].'<br/>';
							
						?>
					
					</p>
				</div>
				<div class="isi_kanan">
					<center><div class="tombol"><a href="input_keranjang.php?idkategori=<?php echo $row['idkategori']; ?>&idbarang=<?php echo $row['idbarang'];?>">Beli</a></div></center>
				</div>
					<?php?>
			</div>
			<div id="kaki">
				<br><br><br><center>&copy IF_UNDIP</center>
			</div>
		</div>
		</center>
	</body>
</html>