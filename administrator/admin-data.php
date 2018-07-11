<h2>Data Operator</h2>
<div class="table table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>User Level</th>
			</tr>
		</thead>
		<tbody>
			<!-- Proses menampilkan sekaligus melakukan perulangan (looping) data -->
			<?php 
				include 'koneksi.php';

				//query sql untuk menampilkan SELECT
				$sql = "SELECT * FROM tbl_admin 
						ORDER BY id_opr ASC";
				$query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

				$no = 1; //nomer urut

				//tarik dan looping data
				while($data = mysqli_fetch_array($query)){?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $data["username"];?></td>
						<td><?php echo $data["password"];?></td>
						<td><?php echo $data["email"];?></td>
						<td><?php echo $data["user_level"];?></td>			
					</tr>

					<?php $no++; ?>
				<?php }
			?>
		</tbody>
	</table>
</div>