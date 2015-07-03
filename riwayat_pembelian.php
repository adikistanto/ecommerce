<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html401/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Riwayat Transaksi</title>
		<link href="assets/global.css" rel="stylesheet">
		<style>
		table{border:none; padding:10px}
		th{border:0px;background:#FFCC00}
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
		<h2>Riwayat Transaksi Pembelian</h2>
		
		<?php 
		//koneksi ke database
			session_start();
			require_once('/db_login.php');
			$db = new mysqli($db_host, $db_username, $db_password, $db_database);
			if($db->connect_errno){
				die("Could not connect to the database: <br />".$db->connect_error);
			}
			
			$idpelanggan=$_SESSION['idpelanggan'][0];
			
			//Assign a query
			$query1 = "SELECT * FROM penjualan,status_penjualan WHERE 
						penjualan.idpenjualan=status_penjualan.idpenjualan and penjualan.idpelanggan=$idpelanggan ORDER BY tgl_penjualan";
			$query2 = "SELECT * FROM status,status_penjualan WHERE
						status.idstatus=status_penjualan.idstatus";
			//Execute the query
			$result1 = $db->query($query1);
			$result2 = $db->query($query2);
			
			if(!$result1 && !$result2){
				die("Could not query the database: <br />".$db->error);
			}
			if (empty($result1)){
				echo "<h3>Belum ada riwayat pembelian</h3>";
			}else{
				echo '<table border="1">';
					echo '<tr>';
						echo '<th rowspan="2">No</th>';
						echo '<th rowspan="2">Tanggal Pembelian</th>';
						echo '<th rowspan="2">Tanggal Pembayaran</th>';
						echo '<th rowspan="2">Jumlah Barang</th>';
						echo '<th colspan="4">Detail Barang</th>';
						echo '<th rowspan="2">Total Harga</th>';
						echo '<th rowspan="2">Status</th>';
					echo '</tr>';
					echo '<tr>';
						echo '<th width="100">Nama Barang</th>';
						echo '<th width="100">ID Barang</th>';
						echo '<th width="100">Jumlah Pesan</th>';
						echo '<th width="100">Harga Satuan</th>';
					echo '</tr>';
							
					//Fetch and display the result
					$i = 1;
					while(($row = $result1->fetch_object()) && ($row2 = $result2->fetch_object())){
						echo '<tr>';
							echo '<td>'.$i.'</td>';
							echo '<td>'.$row->tgl_penjualan.'</td>';
							echo '<td>'.$row->tgl_update.'</td>';
							echo '<td>'.$row->total_item.'</td>';
							echo '<td colspan="4">';
								echo '<table width="100%">';
								$idi = $row->idpenjualan;
								$query3 = "SELECT * FROM detail_penjualan,barang WHERE barang.idbarang=detail_penjualan.idbarang AND detail_penjualan.idpenjualan=$idi";
								$result3 = $db->query($query3);
								while($row3 = $result3->fetch_object()){
									echo '<tr align="center">';
										echo '<td width="100" border="1">'.$row3->nama.'</td>';
										echo '<td width="100" border="1">'.$row3->idbarang.'</td>';
										echo '<td width="100" border="1">'.$row3->qty.'</td>';
										echo '<td width="100" border="1">'.$row3->harga.'</td>';
									echo '</tr>';
								}
								echo '</table>';
							echo '</td>';
							echo '<td>'.$row->total_harga.'</td>';
							echo '<td>'.$row2->nama.'</td>';
						echo '</tr>';
						$i++;
					}
					echo '<br />';
					$result1->free();
					$db->close();
				echo '</table>';
			}
			
			?>
			</div>
			<div id="kaki">
				<br><br><center>&copy IF_UNDIP</center>
			</div>
		</div>
		</center>
		
	</body>
</html>