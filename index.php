<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home | SMA Gunadarma</title>

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
    					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img src="assets/pic1.jpeg" alt="...">
                                  <div class="carousel-caption">
                                    ...
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="assets/pic2.jpeg" alt="...">
                                  <div class="carousel-caption">
                                    ...
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="assets/pic3.jpeg" alt="...">
                                  <div class="carousel-caption">
                                    ...
                                  </div>
                                </div>
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
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