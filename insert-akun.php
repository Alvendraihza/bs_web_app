<?php
	include "administrator/koneksi.php";

	$nm = $_POST["nama"];
	$ps = md5($_POST["pass"]);
	$em = $_POST["mail"];

	$sql = "INSERT INTO tbl_admin (username,password,email) VALUES('$nm','$ps','$em')";
	$query = mysqli_query ($konek,$sql) or die (mysqli_error($konek));

	if($query){
		header("location: akun-baru.php?success");
	}else{
		mysqli_error();
	}
?>