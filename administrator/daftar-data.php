<h4>REGISTRASI CMS</h4>
<hr>

<?php
	if(isset($_GET["status"])){
		$st = $_GET["status"];
		switch($st){
			case '1':
				echo "<div class='alert alert-success' role='alert'>Berhasil Input Data.</div>";
				break;
			default:
				echo "failed";
				break;
		}
	}
?>

<form action="insert-data.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="ido" value="<?php echo $data['id_opr'];?>">
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="email" class="form-control" name="mailku" placeholder="Masukkan E-mail">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jk" value="L">Laki-Laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jk" value="P">Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="almt" cols="30" rows="5"></textarea>
	</div>
	<div class="form-group">
		<label>Jurusan</label>
		<select name="jur" class="form-control">
			<option value="">PILIH</option>
			<option value="1">IPA</option>
			<option value="2">IPS</option>
		</select>
	</div>
    <div class="form-group">
        <label>Pilih Ekstrakulikuler</label>
        <div class="checkbox">
           <label>
               <input type="checkbox" name="ek[]" value="Pramuka"> Pramuka
           </label> 
        </div>
        <div class="checkbox">
           <label>
               <input type="checkbox" name="ek[]" value="PMR"> PMR
           </label> 
        </div>
        <div class="checkbox">
           <label>
               <input type="checkbox" name="ek[]" value="Paskibra"> Paskibra
           </label> 
        </div>
    </div>
	<div class="form-group">
		<label>Unggah File</label>
		<input type="file" name="fileku">
	</div>
	<div class="form-group">
		<input type="submit" value="SIMPAN" class="btn btn-success" name="save">
		<input type="reset" value="BATAL" class="btn btn-danger" name="clear">
	</div>
</form>