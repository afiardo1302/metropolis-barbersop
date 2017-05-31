

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="utf-8">

    <title>Metropolis Barbershop</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/shop-homepage.css" rel="stylesheet">
    


    </head>

    <body>

   <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
         <!--  <div class="container-fluid"> -->
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img alt="Brand" src="<?php echo base_url(); ?>/assets/img/logom.png" height="30" width="30">             
              </a>
            </div>
          <!-- </div> -->

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="#">Metropolis Barbershop</a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <ul class="nav navbar-nav">
                        <li ><a href="<?php echo base_url(); ?>index.php/myControl/indextest" >Beranda</a></li>

                        <li class="active"><a href="<?php echo base_url(); ?>index.php/myControl/viewShop" >Shop</a></li>

                        <li ><a href="<?php echo base_url(); ?>index.php/myControl/viewFeedback" >Feedback</a></li>

                        <li ><a href="<?php echo base_url(); ?>index.php/myControl/viewFind">Temukan Kami</a></li>

                    </ul>

                </div>

            </div>

        </nav>
         <div  class="col-md-2" background-color:"blue">
            <ABBR></ABBR>

        </div>

        <!-- Buat Tabel Shopping -->
        <div  class="col-md-8">

                <div  class="row carousel-holder">

                    <div  class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img   class="slide-image" src="<?php echo base_url(); ?>/assets/img_salon/produk/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img  class="slide-image" src="<?php echo base_url(); ?>/assets/img_salon/produk/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img  class="slide-image" src="<?php echo base_url(); ?>/assets/img_salon/produk/4.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div align="center" class="row">
                    <?php foreach ($data as $p) {
                        # code...?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img style="width:320px;height:150px;" src="<?php echo base_url('uploads/'.$p['img_produk']); ?>" height="150" width="320" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $p['harga_produk']; ?></h4>
                                <h4><a href="#"><?php echo $p['nama_produk']; ?></a>
                                </h4>
                                <p><?php echo $p['deskripsi']; ?></p>
                            </div>
                           
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <footer class="wrapper style1 align-center" background-color="black">
                        <div class="inner">
                            <ul class="icons">
                                
                                
                            </ul>
                            <p align="CENTER">&copy; Metropolist Barbershop <a href="<?php echo base_url(); ?>index.php/myControl/viewFind">Temukan Kami  !</a>.</p>
                        </div>
                </footer>
            </div>
            <div  class="col-md-2" background-color:"blue">
            <ABBR></ABBR>

            </div>

           

            <hr>

            <div class="row">

                <div class="col-sm-12">

                    

                </div>

            </div>

        </div>
        <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    </body>
    

    </html>

