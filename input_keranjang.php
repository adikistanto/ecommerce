<?php
session_start();
if(!isset($_SESSION['transaksi'])){
    $idt = date("ymdHis");
    $_SESSION['transaksi'] = $idt;
}

$idtransaksi = $_SESSION['transaksi'];
$idbarang = $_GET['idbarang'];
if(!isset($idbarang)){
    die("tidak ada transaksi");
}

include "config.php";
mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
mysql_select_db($DB);

$pakaian = mysql_query("select * from barang where idbarang=$idbarang");
$b = mysql_fetch_array($pakaian);
$search = mysql_query("select * from detail_penjualan where idbarang=$idbarang");
$s = mysql_fetch_array($search);
$harga = $b['harga'];
$qty = $s['qty']; $harganya = $s['harga'];
$check = $s['idbarang'];
if($idbarang==$check){	
    $qty = $qty+1;
	$hargabaru = $harganya*$qty;
	$update = mysql_query("update detail_penjualan set qty=$qty, harga=$hargabaru where idbarang=$idbarang");
	if($update){
			$pesan = 'Berhasil ditambahkan';
			header("location:detail_produk.php?id=".$idbarang."",$pesan);
		}else{
			die ("Error <br />". mysql_error());
		}
	}
else{
		$masuk = mysql_query("insert into detail_penjualan values(null,'$idtransaksi',$idbarang,1,$harga)");
		$masukjual = mysql_query("insert into penjualan values($idtransaksi,'$idtransaksi',$idbarang,1,$harga)");
		if($masuk){
			header("location:detail_produk.php?id=".$idbarang."");
		}else{
			die ("Error <br />". mysql_error());
		}
	}
?>
<script language="JavaScript">
		alert('Sukses ditambahkan'); 
		document.location='detail_produk.php';
</script>