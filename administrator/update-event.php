<?php 
	include "koneksi.php";

	$jd = $_POST["judul"];
	$ds = $_POST["singkat"];
	$dt = $_POST["detail"];
	$ide = $_POST["id"];

	date_default_timezone_set("Asia/Jakarta");

	$tgl = date("Y:m:d");
	$wk = date("H:i:s");


	//proses upload file
	$nm_file = $_FILES["fileku"]["name"];//nama file yang di upload
	$tmp_file = $_FILES["fileku"]["tmp_name"];//lokasi file sementara
	$ukuran_file = $_FILES["fileku"]["size"];//ukuran file
	$jenis_file = $_FILES["fileku"]["type"];//jenis file

	//tentukan lokasi atau folder file untuk menyimpan gambar
	$dir = "hasil-upload/$nm_file";

	//jika gambar tidak di rubah

	if($nm_file == ""){
		//query sql update
		$sql = "UPDATE tbl_event
		 		SET judul='$jd',
					desk_singkat='$ds',
					detail='$dt',
					tanggal='$tgl',
					jam='$wk'
				WHERE id_event='$ide'";
		$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
	} else {
		move_uploaded_file($tmp_file, $dir);
		$sql = "UPDATE tbl_event
		 		SET judul='$jd',
					desk_singkat='$ds',
					detail='$dt',
					tanggal='$tgl',
					jam='$wk',
					gambar='$nm_file'
				WHERE id_event='$ide'";
		$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
	}

	//cek
	if($query){
		echo "<script type='text/javascript'>alert('Berhasil Rubah Data!')</script>
			  <meta http-equiv='refresh' content='1; url=index.php?levent'>";
	} else {
		mysqli_error();
	}
?>