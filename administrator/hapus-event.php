<?php 
	include "koneksi.php";

	$idh = $_GET["event_hapus_id"];

	//Query sql delete
	$sql = "DELETE FROM tbl_event WHERE id_event='$idh'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	if($query){
		echo "<script type='text/javascript'>alert('Berhasil Hapus Data!')</script>
			  <meta http-equiv='refresh' content='1; url=index.php?levent'>";
	} else {
		mysqli_error();
	}
?>