<?php 
	include "koneksi.php";

	$nm = $_POST["nama"];
	$em = $_POST["mailku"];
	$jk = $_POST["jk"];
	$al = $_POST["almt"];
	$jr = $_POST["jur"];
	$ide = $_POST["id"];

	$ek = implode(",", $_POST["ek"]);

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
		$sql = "UPDATE tbl_biodata
		 		SET nama='$nm',
					email='$em',
					jkelamin='$jk',
					alamat='$al',
					jurusan='$jr',
					ekskul='$ek'
				WHERE id_bio='$ide'";
		$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
	} else {
		move_uploaded_file($tmp_file, $dir);
		$sql = "UPDATE tbl_biodata
		 		SET nama='$nm',
					email='$em',
					jkelamin='$jk',
					alamat='$al',
					jurusan='$jr',
					dokumen='$nm_file',
					ekskul='$ek'
				WHERE id_bio='$ide'";
		$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
	}

	//cek
	if($query){
		echo "<script type='text/javascript'>alert('Berhasil Rubah Data!')</script>
			  <meta http-equiv='refresh' content='1; url=index.php?edit_id=$ide&status=1'>";
	} else {
		mysqli_error();
	}
?>