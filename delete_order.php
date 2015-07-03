<?php
include "config.php";
mysql_connect($HOST,$USER_NAME,$PASSWORD) or die("tidak bisa koneksi ke database");
mysql_select_db($DB);

$id = $_GET['id'];

$del = mysql_query("delete from detail_penjualan where nomor=$id");
if($del){
    header("location:keranjang.php");
}else{
    echo "error";
}
?>
