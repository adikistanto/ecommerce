<!DOCTYPE html>
<?php
	require_once('db_login.php');
	session_start();
		$idpelanggan=$_POST['idpelanggan'];
		$idpenjualan=$_POST['idpenjualan'];
		$namabank=$_POST['namabank'];
		$norekening=$_POST['norekening'];
		$namarekening=$_POST['namarekening'];
		$total=$_POST['totalbayar'];
		$tanggal=date("y-m-d");
		
		if ($_FILES['file']['error'] > 0)
		{
			echo 'Problem: ';
			switch ($_FILES['file']['error'])
			{
				case 1:  echo 'File exceeded upload_max_filesize';
						break;
				case 2:  echo 'File exceeded max_file_size';
						break;
				case 3:  echo 'File only partially uploaded';
						break;
				case 4:  echo 'No file uploaded';
						break;
				case 6:  echo 'Cannot upload file: No temp directory specified';
						break;
				case 7:  echo 'Upload failed: Cannot write to disk';
						break;
			}
			exit;
		}

		$target_dir = "bukti_bayar/";
		$temp=explode(".",$_FILES["file"]["name"]);
		$newfilename = $idpenjualan.'.'.end($temp);
		$target_file = $target_dir . $newfilename;
		$upload_ok = 1;
		$file_type = pathinfo($target_file,PATHINFO_EXTENSION);

		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.<br />";
			$upload_ok = 0;
		}
		// Check file size if you not use hidden input 'MAX_FILE_SIZE'
		/*if ($_FILES['userfile']['size'] > 1000000) {
			echo "Sorry, your file is too large.<br />";
			
			$upload_ok = 0;
		}*/
		// Allow certain file formats
		$allowed_type = array("jpg", "png", "jpeg", "gif");
		if(!in_array($file_type, $allowed_type)) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$upload_ok = 0;
		}
		// Does the file have the right MIME type?
		/*if ($_FILES['userfile']['type'] != 'text/plain'){
			echo 'Problem: file is not plain text';
			$uploadOk = 0;
		}*/
		// put the file where we'd like it
		if ($upload_ok != 0){
			if (is_uploaded_file($_FILES['file']['tmp_name'])){
				if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
					echo 'Problem: Could not move file to destination directory';
				}else{
					echo 'OKE</br>';
					echo 'File uploaded successfully<br /><br />';
					
				}
			}else{
				echo 'Problem: Possible file upload attack. Filename: ';
				echo $_FILES['file']['name'];
			}
		}
	
		$db = new mysqli($db_host, $db_username, $db_password);

		if ($db->connect_errno){
			die ("Could not connect to the database: <br />". $db->connect_error);
			}

		$db_select = $db->select_db($db_database);
		if (!$db_select)
		{
			die ("Could not select the database: <br />". $db->error);
		}
		//Asign a query

		$query = "INSERT INTO `ecommerce`.`konfirm_pembayaran` (`idpenjualan`, `nama_bank`, `no_rekening`, `nama`, `total_bayar`, `tgl_bayar`, `scan_struk`) VALUES ('".$idpenjualan."', '".$namabank."', '".$norekening."', '".$namarekening."', '".$total."', '".$tanggal."', '".$target_file."');";
			
		 //Execute the query
		$result = $db->query( $query );
		if (!$result){
		   die ("Could not query the database: <br>". $db->error);
		}
		//$hasil=$result->fetch_object();
		$query ="UPDATE `status_penjualan` SET `idstatus`=1 WHERE idpenjualan=".$idpenjualan;
		$result=$db->query( $query );
	
?>
<script language="JavaScript">alert('Konfirmasi pembayaran berhasil, Silahkan menunggu proses verifikasi'); document.location='index_masuk.php'</script>