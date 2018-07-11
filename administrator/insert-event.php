<?php 

	include "koneksi.php";

	$jd = $_POST["judul"];
	$ds = $_POST["singkat"];
	$dt = $_POST["detail"];

	date_default_timezone_set("Asia/Jakarta");

	$tgl = date("Y:m:d");
	$wk = date("H:i:s");

	//proses upload file
	$nm_file = $_FILES["fileku"]["name"];//nama file yang di upload
	$tmp_file = $_FILES["fileku"]["tmp_name"];//lokasi file sementara
	$ukuran_file = $_FILES["fileku"]["size"];//ukuran file
	$jenis_file = $_FILES["fileku"]["type"];//jenis file

	//menentukan lokasi atau folder file untuk menyimpan gambar
	$dir = "hasil-upload/$nm_file";

	//memindahkan file : XAMPP/tmp/ ke folder tujuan (hasil-upload)
	move_uploaded_file($tmp_file, $dir);

	//query SQL INSERT
	$sql = "INSERT INTO tbl_event(judul,desk_singkat,detail,tanggal,jam,gambar) VALUES ('$jd','$ds','$dt','$tgl','$wk','$nm_file')";
	//eksekusi query SQL diatas dengan mysqli query
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	//cek
	if($query){
		echo "<script type='text/javascript'>alert('Berhasil Simpan')</script>
			  <meta http-equiv='refresh' content='2; url=index.php?levent'>";
	} else {
		mysqli_error();
	}
?>