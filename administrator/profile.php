<h1>Profile</h1>

<div class="col-md-6">

	<?php
		include 'koneksi.php';

		$idp = $_GET["profil"];

		$sql = "SELECT * FROM tbl_biodata
				JOIN tbl_jurusan
				ON tbl_biodata.jurusan = tbl_jurusan.id_jur
				WHERE id_adm='$idp'";
		$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
		$data = mysqli_fetch_array($query);
	?>

	<img class="img img-responsive" src="hasil-upload/<?php echo $data['dokumen'];?>" height="100" width="100">
	<hr>

	<label>Nama Lengkap</label>
	<p><?php echo $data["nama"];?></p>
	<label>Jenis Kelamin</label>
	<p><?php echo $data["jkelamin"];?></p>
	<label>E-mail</label>
	<p><?php echo $data["email"];?></p>
	<label>Jurusan</label>
	<p><?php echo $data["desk_jurusan"];?></p>
	<label>Ekstrakulikuler</label>
	<p><?php echo $data["ekskul"];?></p>
	<label>Alamat</label>
	<p><?php echo $data["alamat"];?></p>

	<a href="index.php?edit_id=<?php echo $data['id_bio'];?>" class="btn btn-warning">Edit</a>

</div>