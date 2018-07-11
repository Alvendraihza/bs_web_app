<h4>Tambah Event</h4>
<hr>

 <form action="insert-event.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
    </div>
    <div class="form-group">
      <label>Deskripsi Singkat</label>
      <textarea class="form-control" name="singkat" id="singkat" cols="80" rows="10"></textarea>
      <script>
      	CKEDITOR.replace('singkat')
      </script>
    </div>
    <div class="form-group">
      <label>Detail</label>
      <textarea class="form-control" name="detail" id="detail" cols="80" rows="10"></textarea>
      <script>
      	CKEDITOR.replace('detail')
      </script>
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