<html>
	<head>
	<?php require_once ("db_connect.php");
		session_start();
		
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
					<form method="POST" action="index_baru.php">
						<input class="input_form" type="text" name="input_cari" placeholder="masukan kata kunci"/>
						<input class="submit_form" type="submit" value="cari" name="submit_cari">
					</form>
				</div>
				<div class="tombol"><a href="keranjang.php">Keranjang</a></div>
				<?php if (isset($_SESSION['idpelanggan'])){
					echo '<div class="tombol"><a href="detail_pesanan.php">Konfirmasi</a></div>';
					}?>
				<div class="tombol"><a href="form_login.php">Login</a></div>
			</div>
			<div id="isi">
				<?php
					$con = new mysqli($db_host, $db_user, $db_pass,$db_name);
						if ($con->connect_errno){
							die ("Could not connect to the database: <br />". mysqli_connect_error( ));
							}
						if (isset($_POST['submit_cari'])){
							$kunci=$_POST['input_cari'];
							$query_cari = " SELECT * FROM barang WHERE nama like '%".$kunci."%' ";
							// Execute the query
							$result_cari = $con->query($query_cari);
							if (!$result_cari){
								die ("Could not query the database: <br />". mysqli_error($con));
							}
								echo '<div class="isi_1">';
								while ($row = $result_cari->fetch_array()){
								echo '<div class="isi_1_1">
										<a href="list_perkategori.php?idkategori='.$row['idkategori'].'"><img class="gambar_detail" src="'.$row['file_gambar'].'"/>
								</a><br><br><a href="list_perkategori.php?idkategori='.$row['idkategori'].'">'.$row['nama'].'</a></div>';}
						}else{ 
							//Asign a query
							$query = " SELECT * FROM kategori";
							// Execute the query
							$result = $con->query($query);
							if (!$result){
								die ("Could not query the database: <br />". mysqli_error($con));
							}
							// Fetch and display the results
							echo '<div class="isi_1">';
							while ($row = $result->fetch_array())
							echo '<div class="isi_1_1"><a href="list_perkategori.php?idkategori='.$row['idkategori'].'"><img class="gambar_detail" src="'.$row['file_gambar'].'"/>
							</a><br><br><a href="list_perkategori.php?idkategori='.$row['idkategori'].'">'.$row['nama'].'</a></div>';
						}
						?>
				</div>
			</div>
			<div id="kaki">
				<br><br><center>&copy IF_UNDIP</center>
			</div>
		</div>
		</center>
	</body>
</html>