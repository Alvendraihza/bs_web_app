<h2> Edit Data</h2>

<?php 
	include "koneksi.php";

	$id = $_GET["edit_id"];

	$sql = "SELECT * FROM tbl_biodata WHERE id_bio='$id'";
	$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

	//tarik data
	$data = mysqli_fetch_array($query);

	//pecah data
	$ek = explode(",", $data["ekskul"]);

?>

<?php
	if(isset($_GET["status"])){
		$st = $_GET["status"];
		switch($st){
			case '1':
				echo "<div class='alert alert-success' role='alert'>Berhasil Rubah Data.</div>";
				break;
			default:
				echo "failed";
				break;
		}
	}
?>

<div class="col-md-6">
	<form action="update-data.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $data["id_bio"];?>">
		<div class="form-group">
			<label>Nama Lengkap</label>
			<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?php echo $data["nama"];?>">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" class="form-control" name="mailku" placeholder="Masukkan E-mail" value="<?php echo $data["email"];?>">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<div class="radio">
				<label>
					<input type="radio" name="jk" value="L"<?php if($data['jkelamin'] == "L") echo "checked";?>>Laki-Laki
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="jk" value="P"<?php if($data['jkelamin'] == "P") echo "checked";?>>Perempuan
				</label>
			</div>
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="almt" cols="30" rows="5"><?php echo $data["alamat"];?></textarea>
		</div>
		<div class="form-group">
			<label>Jurusan</label>
			<select name="jur" class="form-control">
				<option value="">PILIH</option>
				<option value="1"<?php if($data['jurusan'] == "1") echo "selected"; ?>>IPA</option>
				<option value="2"<?php if($data['jurusan'] == "2") echo "selected"; ?>>IPS</option>
			</select>
		</div>
		<div class="form-group">
            <label>Pilih Ekstrakulikuler</label>
            <div class="checkbox">
               <label>
                   <input type="checkbox" name="ek[]" value="Pramuka"<?php if(in_array("Pramuka", $ek)) echo "checked";?>> Pramuka
               </label> 
            </div>
            <div class="checkbox">
               <label>
                   <input type="checkbox" name="ek[]" value="PMR"<?php if(in_array("PMR", $ek)) echo "checked";?>> PMR
               </label> 
            </div>
            <div class="checkbox">
               <label>
                   <input type="checkbox" name="ek[]" value="Paskibra"<?php if(in_array("Paskibra", $ek)) echo "checked";?>> Paskibra
               </label> 
            </div>
        </div>
		<div class="form-group">
			<img src="hasil-upload/<?php echo $data['dokumen'];?>" height="100" width="100">
		</div>
		<div class="form-group">
			<label>Unggah File</label>
			<input type="file" name="fileku">
		</div>
		<div class="form-group">
			<input type="submit" value="RUBAH" class="btn btn-success" name="edit"
		</div>
	</form>
</div>