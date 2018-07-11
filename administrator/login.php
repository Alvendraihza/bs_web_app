<?php
    session_start();

    include "koneksi.php";

    //jika tombol ingin di klik
    if(isset($_POST["masuk"])){
        $us = $_POST["user"];
        $ps = md5($_POST["pass"]); // enkripsi md5

        //cocokkan hasil inputan dengan yang ada di database
        $sql = "SELECT * FROM tbl_admin WHERE username='$us' AND password='$ps'";
        $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));

        //tarik data
        $data = mysqli_fetch_array($query);

        //periksa jika ada data
        if(mysqli_num_rows($query) > 0){
            //berikan sesi
            $_SESSION["tiket_masuk"] =  $data["username"];
            $_SESSION["tiket_pass"] =  $data["password"];
            $_SESSION["tiket_level"] =  $data["user_level"];

            //arahkan halaman ke index.php
            header("location: index.php");
        } else {
            //jika username dan password tidak cocok
            header("location: login.php?failed");
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head.php -->
<?php include "page/head.php";?> 

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-unlock-alt"></i> Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                        <!-- Notifikasi Gagal Login -->

                        <?php 

                            if(isset($_GET["failed"])){?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <strong>Gagal Login!</strong> Periksa Username & Password anda.
                                </div>
                            <?php }

                        ?>

                        


                        <form role="form" action="" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="masuk" value="LOGIN" class="btn btn-lg btn-success btn-block">

                                <br>

                                <i class="fa fa-pencil"></i> <a href="../akun-baru.php">Daftar Baru</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer.php -->
    <?php include "page/footer.php";?>

</body>

</html>
