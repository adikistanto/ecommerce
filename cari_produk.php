<html>
	<head>
	<?php require_once ("db_connect.php");?>
	<title>E-Commerce</title>
	</head>
	<body>
		<center>
			<h2>Selamat Datang di Tokoku</h2><br>
			<form method="POST" action="cari_produk.php">
				<select name="kategori">
					<option value="11" >kategori1</option>
					<option value="12" >kategori2</option>
					<option value="13" >kategori3</option>
				</select><br><br>
				<input type="text" name="kunci" placeholder="masukan kata kunci"><input type="submit" value="cari" name="cari">
			</form ><br><br>
			<table border="1">
				<tr><td width="100">Gambar</td><td width="100">Nama</td><td width="100">Harga</td><td width="100">Stok</td><td>Add</td></tr>
				<?php 
					if (isset($_POST['cari'])){
						$con = new mysqli($db_host, $db_user, $db_pass,$db_name);
							if ($con->connect_errno){
								die ("Could not connect to the database: <br />". mysqli_connect_error( ));
								}
							//Asign a query
							$kategori=$_POST['kategori'];
							$kunci=$_POST['kunci'];
							$query = "SELECT * FROM barang WHERE idkategori='".$kategori."' and nama like '%".$kunci."%'";
							// Execute the query
							$result = $con->query($query);
							if (!$result){
								die ("Could not query the database: <br />". mysqli_error($con));
							}
							// Fetch and display the results
							while ($row = $result->fetch_array()){
								echo '<tr>';
								echo '<td><a href="detail_produk.php?idbarang='.$row['idbarang'].'"><img style="width :150px;height:auto"src="'.$row['file_gambar'].'"/></a></td>';
								echo '<td><a href="detail_produk.php?idbarang='.$row['idbarang'].'">'.$row['nama'].'</a></td>';
								echo '<td><a href="detail_produk.php?idbarang='.$row['idbarang'].'">'.$row['harga'].'</a></td>';
								echo '<td><a href="detail_produk.php?idbarang='.$row['idbarang'].'">'.$row['stok'].'</a></td>';
								echo '<td><a href="detail_produk.php?idbarang='.$row['idbarang'].'">'.$row['stok'].'</a></td>';
								echo '<td><a href="detail_produk.php?idbarang='.$row['idbarang'].'">Detail</a></td>';
								echo '</tr>';
							}
							echo '<br>';
							$con->close();
					}
				?>
			</table>
		</center>
	</body>
</html>