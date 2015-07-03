
<?php
session_start();

//jika session idpelanggan belum dibuat atau session kosong
if(!isset($_SESSION['idpelanggan']) || empty($_SESSION['idpelanggan'])){
	//redirect ke halaman login
	$pesan='Maaf Anda harus login dulu';
	header('location:form_login2.php','$pesan');
}

?>