<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Event | SMA Gunadarma</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

    
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
    					<?php include "page/sidebar.php";?>
    				</div>
    				<div class="col-md-9">
                        <?php 
                            include 'administrator/koneksi.php';

                            //query sql untuk menampilkan SELECT
                            $sql = "SELECT * FROM tbl_event
                                    ORDER BY id_event DESC";
                            $query = mysqli_query($konek,$sql) or die (mysqli_error($konek));
                            while($data = mysqli_fetch_array($query)){?>
                                <div class="row">
                                    <div class="page-header">
                                        <h3><?php echo $data['judul'];?></h3>
                                    </div>
                                    <img src="administrator/hasil-upload/<?php echo $data['gambar'];?>" class="img img-thumbnail">
                                    <br>
                                    <br>
                                    <p><?php echo $data['desk_singkat'];?></p>

                                    <a href="detail-event.php?detail_id=<?php echo $data['id_event'];?>">
                                      <button class="btn btn-primary">
                                          Read more
                                      </button>

                                    </a>

                                    <br>
                                    <br>

                                    Tanggal <?php echo $data['tanggal'];?> | <?php echo $data['jam'];?> WIB
                                </div>
                            <?php }
                        ?>
            
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