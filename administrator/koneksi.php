<?php
	$server = "localhost";//nama server
	$user = "root";//nama server
	$pass = "";//nama server
	$dbase = "db_tugasapp";//nama server

	//perintah koneksi
	$konek = mysqli_connect($server,$user,$pass,$dbase) or die (mysqli_error($konek));

	// echo "Koneksi nya bisa bos";

?>