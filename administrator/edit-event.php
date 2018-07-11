<h4>Tambah Event</h4>
<hr>

<?php 
  include "koneksi.php";

  $id = $_GET["event_edit_id"];

  $sql = "SELECT * FROM tbl_event WHERE id_event='$id'";
  $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

  //tarik data
  $data = mysqli_fetch_array($query);

?>
 <form action="update-event.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $data['id_event'];?>">
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" placeholder="Masukkan Username" value="<?php echo $data['judul'];?>">
    </div>
    <div class="form-group">
      <label>Deskripsi Singkat</label>
      <textarea class="form-control" name="singkat" id="singkat" cols="80" rows="10" ><?php echo $data['desk_singkat'];?></textarea>
      <script>
      	CKEDITOR.replace('singkat')
      </script>
    </div>
    <div class="form-group">
      <label>Detail</label>
      <textarea class="form-control" name="detail" id="detail" cols="80" rows="10"><?php echo $data['detail'];?></textarea>
      <script>
      	CKEDITOR.replace('detail')
      </script>
    </div>
    <div class="form-group">
      <img src="hasil-upload/<?php echo $data['gambar'];?>" height="100" width="100">
    </div>
    <div class="form-group">
      <label>Foto</label>
      <input type="file" name="fileku">
    </div>
    <div class="form-group">
      <input type="submit" value="SIMPAN" class="btn btn-success" name="save">
      <input type="reset" value="BATAL" class="btn btn-danger" name="clear">
    </div>
 </form>