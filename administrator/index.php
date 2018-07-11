<?php 
    session_start();

    //jika sesi tidak ada
    if(empty($_SESSION["tiket_masuk"])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head.php -->
<?php include "page/head.php";?> 
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "page/navigasi.php";?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
             <div class="row">
                <div class="col-lg-12">
                   <!-- Dynamic Pages -->
                   <?php 
                        if(isset($_GET["lihat"])){
                            include "tampil-data.php";
                        } else if(isset($_GET["hapus_id"])){
                            include "hapus-data.php";
                        } else if(isset($_GET["edit_id"])){
                            include "edit-data.php";
                        } else if(isset($_GET["cari"])){
                            include "hasil-cari.php";
                        } else if(isset($_GET["kode_jur"])){
                            include "filter-data.php";
                        } else if(isset($_GET["daftar"])){
                            include "daftar-data.php";
                        } else if(isset($_GET["admin"])){
                            include "admin-data.php";
                        } else if(isset($_GET["profil"])){
                            include "profile.php";
                        } else if(isset($_GET["tevent"])){
                            include "input-event.php";
                        } else if(isset($_GET["levent"])){
                            include "tampil-event.php"; 
                        } else if(isset($_GET["event_hapus_id"])){
                            include "hapus-event.php";
                        } else if(isset($_GET["event_edit_id"])){
                            include "edit-event.php";    
                        } else {
                            include "page/home.php";
                        }
                        
                   ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- footer.php -->
    <?php include "page/footer.php";?>

</body>

</html>
