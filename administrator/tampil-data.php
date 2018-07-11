<h2>Data Pendaftar</h2>
<div class="table table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Jurusan</th>
				<th>Ekstrakulikuler</th>
				<th>Foto</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<!-- Proses menampilkan sekaligus melakukan perulangan (looping) data -->
			<?php 
				include 'koneksi.php';

				//query sql untuk menampilkan SELECT
				$sql = "SELECT * FROM tbl_biodata 
						JOIN tbl_jurusan
						ON tbl_biodata.jurusan = tbl_jurusan.id_jur
						ORDER BY id_bio ASC";
				$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

				$no = 1; //nomer urut

				//tarik dan looping data
				while($data = mysqli_fetch_array($query)){?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $data["id_bio"];?></td>
						<td><?php echo $data["nama"];?></td>
						<td><?php echo $data["email"];?></td>
						<td><?php echo $data["jkelamin"];?></td>
						<td><?php echo $data["alamat"];?></td>
						<td><?php echo $data["desk_jurusan"];?></td>
						<td><?php echo $data["ekskul"];?></td>
						<td><img src="hasil-upload/<?php echo $data["dokumen"];?>" width="100" ></td>

						<?php 
							// jika status user level sebagai Admin
							if($_SESSION["tiket_level"] == "Admin") {?>
								
								<td><a href="index.php?hapus_id=<?php echo $data['id_bio'];?>" class="btn btn-danger">Hapus</a></td>
							
							<?php }

						?>

								<td><a href="index.php?edit_id=<?php echo $data['id_bio'];?>" class="btn btn-warning">Edit</a></td>
						
					</tr>

					<?php $no++; ?>
				<?php }
			?>
		</tbody>
	</table>

	<a href="cetak-data.php" target="_blank">
		<button class="btn btn-primary"><i class="fa fa-print"></i> &nbsp;Cetak Laporan</button>
	</a>
</div>