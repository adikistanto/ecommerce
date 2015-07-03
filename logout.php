<?php
	session_start();

	unset($_SESSION['idpelanggan']);
	session_destroy();

	#***************** akhir koneksi ******************#
	#jika ditekan tombol logout
?>
<script language="JavaScript">alert('Anda Telah Logout Dengan Sukses!!'); document.location='index.php'</script>