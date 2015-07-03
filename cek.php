<?php
	//memulai session
	session_start();
	 
	//koneksi ke database
	include "db_connect.php" ;
	$DB = "ecommerce";
	mysql_select_db($DB);
	 
	//mengambil data dari form
	$username    = $_POST['username'];
	$password    = $_POST['password'];
	

	//cek username dan password dari database
	$perintahuser   = "select * from pelanggan where nama=$username && password=$password";
	$perintah_di_query = mysql_query($perintahuser);
	$ketersediaan  = mysql_fetch_array($perintah_di_query);
	$nama=$perintah_di_query['nama'];
	if($nama == $username){
		$_SESSION['username'] = $username;
		header("location: index_baru.php");
	}else{
		echo "Pesan Not Found";
		header("location: login.php");
	}
		
	
		
	
	//$nama=$perintah_di_query['nama'];
	/*if(empty($nama)){
		$nama = FALSE;
	}else{
		//echo $perintah_di_query;
		echo $idpelanggan;
		//$perintah_di_query_pass = mysql_query($perintahpass);
		$ketersediaan  = mysql_num_rows($perintah_di_query);
		//$ketersediaan_pass  = mysql_num_rows($perintah_di_query_pass);
		echo $ketersediaan;
		//Cek adanya username dan password di database dilanjutkan dengan membuat session
		if ($ketersediaan = 1){
			$_SESSION['username'] = $username;
			header("location: index_baru.php");
		}else{
			header("location: login.php");
		}
	}*/
	
	
?>