<h2>Daftar Event</h2>
<div class="table table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>ID</th>
				<th>Judul</th>
				<th>Deskripsi Singkat</th>
				<th>Detail</th>
				<th>Tanggal</th>
				<th>Jam</th>
				<th>Foto</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<!-- Proses menampilkan sekaligus melakukan perulangan (looping) data -->
			<?php 
				include 'koneksi.php';

				//query sql untuk menampilkan SELECT
				$sql = "SELECT * FROM tbl_event
						ORDER BY id_event DESC";
				$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

				$no = 1; //nomer urut

				//tarik dan looping data
				while($data = mysqli_fetch_array($query)){?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $data["id_event"];?></td>
						<td><?php echo $data["judul"];?></td>
						<td><?php echo $data["desk_singkat"];?></td>
						<td><?php echo $data["detail"];?></td>
						<td><?php echo $data["tanggal"];?></td>
						<td><?php echo $data["jam"];?></td>
						<td><img src="hasil-upload/<?php echo $data["gambar"];?>" width="100" ></td>

						<?php 
							// jika status user level sebagai Admin
							if($_SESSION["tiket_level"] == "Admin") {?>
								
								<td><a href="index.php?event_hapus_id=<?php echo $data['id_event'];?>" class="btn btn-danger">Hapus</a></td>
								<td><a href="index.php?event_edit_id=<?php echo $data['id_event'];?>" class="btn btn-warning">Edit</a></td>
							<?php }

						?>

								
						
					</tr>

					<?php $no++; ?>
				<?php }
			?>
		</tbody>
	</table>
</div>