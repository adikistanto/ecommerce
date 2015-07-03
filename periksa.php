<?php
	session_start();
	#**************** koneksi ke mysql *****************#
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname ="ecommerce";
	$conn = mysql_connect($host,$user,$pass);
	if($conn) {
		//select database
		$sele = mysql_select_db($dbname);
		if(!$sele) {
			echo mysql_error();
		}
	}
	#***************** akhir koneksi ******************#
	#jika ditekan tombol login
	if(isset($_POST['login'])) {
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$sql = mysql_query("SELECT idpelanggan FROM pelanggan WHERE nama='$nama' &&
		password='$password'");
		$num = mysql_num_rows($sql);
		$idpelanggan = mysql_fetch_row($sql);
		if($num==1) {
			// login benar //
			$_SESSION['idpelanggan'] = $idpelanggan;
			?><script language="JavaScript">alert('Selamat, Login Anda Sukses!!'); document.location='index_masuk.php'</script><?php
		} else {
			// jika login salah //
			echo "<script>
			eval(\"parent.location='index_baru.php '\");
			alert (' Maaf Login Gagal, Silahkan Isi nama dan Password Anda Dengan Benar');
			</script>";
			//include("login.php");		 
		}
	}
?>