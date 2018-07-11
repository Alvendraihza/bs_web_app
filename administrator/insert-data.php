<?php 

	include "koneksi.php";

	$nm = $_POST["nama"];
	$em = $_POST["mailku"];
	$jk = $_POST["jk"];
	$al = $_POST["almt"];
	$jr = $_POST["jur"];
	$id = $_POST["ido"];

	//menyatukan string
	$ek = implode(",", $_POST["ek"]);

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
	$sql = "INSERT INTO tbl_biodata(nama,email,jkelamin,alamat,jurusan,dokumen,ekskul,id_adm) VALUES ('$nm','$em','$jk','$al','$jr','$nm_file','$ek','$id')";
	//eksekusi query SQL diatas dengan mysqli query
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	//cek
	if($query){
		echo "<script type='text/javascript'>alert('Berhasil Simpan')</script>
			  <meta http-equiv='refresh' content='2; url=index.php?daftar&status=1'>";
	} else {
		mysqli_error();
	}
?>