<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>FORM REGISTRASI</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">

    
  </head>
  <body>
    <div id="wrapper">
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                          <h1><i class="fa fa-home"></i> SMA Gunadarma</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of header -->
        <div id="menu"></div> <!-- end of menu -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="list-group">
                          <a href="#" class="list-group-item active">
                            MENU
                          </a>
                          <a href="index.php" class="list-group-item">Home</a>
                          <a href="akun-baru.php" class="list-group-item">Daftar akun baru</a>
                          <a href="administrator/login.php" class="list-group-item">Login</a>
                          <a href="about.php" class="list-group-item">Tentang Kami</a>
                          <a href="gallery.php" class="list-group-item">Gallery</a>
                          <a href="contact.php" class="list-group-item">Hubungi Kami</a>  
                        </div>
                    </div>
                    <div class="col-md-9">
                       <h4>Buat Akun Baru</h4>
                          <hr>

                          <!-- Notifikasi -->

                           <?php 

                              if(isset($_GET["success"])){?>
                                  <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Berhasil!</strong> Silahkan tunggu konfirmasi.
                                  </div>
                              <?php }

                          ?>

                          <form action="insert-akun.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Username</label>
                              <input type="text" class="form-control" name="nama" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" name="pass" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                              <label>E-mail</label>
                              <input type="email" class="form-control" name="mail" placeholder="Masukkan E-mail">
                            </div>
                            <div class="form-group">
                              <input type="submit" value="SIMPAN" class="btn btn-success" name="save">
                              <input type="reset" value="BATAL" class="btn btn-danger" name="clear">
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div> <!-- end of content -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <p class="text-center"> Hak Cipta &copy; <?php echo date ("Y");?> | Oleh Kelompok 4 </p>
                    </div>
                </div>
            </div>
        </div> <!-- end of footer -->
    </div> <!-- end of wrapper -->
   
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    
    <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  </body>
</html>