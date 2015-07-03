<?php
	session_start();
	include "config.php";
	mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
	mysql_select_db($DB);
	$total_harga=0;
			$total_item=0;
			$total_berat=0;
			$idkota=0;
	if(isset($_SESSION['transaksi']));{
		$idpenjualan=$_SESSION['transaksi'];
		$query="SELECT * FROM detail_penjualan WHERE idpenjualan=$idpenjualan";
		$result=mysql_query($query);
		if($result === FALSE) { 
			die(mysql_error()); // TODO: better error handling
		}
		while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
				$total_harga+=$row['harga'];
				$total_item+=$row['qty'];
				$total_berat+=$row['qty'];
		}
		$idpelanggan=$_SESSION['idpelanggan'][0];
		$tgl=date("y-m-d");
		$idkota=$_POST['kota'];
		$jenis_pengiriman=$_POST['deliv'];
		
		$query='SELECT harga FROM `tarif_ongkir` WHERE idkota_tujuan='.$idkota.' and jenis_pengiriman="'.$jenis_pengiriman.'"';
		$result=mysql_query($query);
		while($row=mysql_fetch_row($result)){
			$ongkir=$row[0];
		}
		$nama_kirim=$_POST['nama'];
		$alamat_kirim=$_POST['alamat'];
		
		$query='INSERT INTO `penjualan` VALUES ("'.$idpenjualan.'","'.$idpelanggan.'","'.$tgl.'","'.$total_harga.'","'.$total_item.'","'.$total_berat.'","'.$ongkir.'","'.$jenis_pengiriman.'","'.$nama_kirim.'","'.$alamat_kirim.'","'.$idkota.'")';
		$result=mysql_query($query);
		$query2='INSERT INTO `status_penjualan`(`idpenjualan`, `idstatus`, `tgl_update`) VALUES ("'.$idpenjualan.'","0","'.$tgl.'")';
		$result2=mysql_query($query2);
		if(($result === FALSE) || ($result2 === FALSE)) { 
			die(mysql_error()); // TODO: better error handling
		}
	}
	

?>
<script language="JavaScript">

		alert('Sukses, Silahkan melakukan konfirmasi setelah melakukan pembayaran'); 
		document.location='detail_pesanan.php';

</script>