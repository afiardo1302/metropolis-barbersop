

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="utf-8">

    <title>Metropolis Babrbershop</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/fb.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/fb1.js"></script>
    


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

                        <li ><a href="<?php echo base_url(); ?>index.php/myControl/indextest">Beranda</a></li>

                        <li><a href="<?php echo base_url(); ?>index.php/myControl/viewShop" >Shop</a></li>

                        <li class="active"><a href="<?php echo base_url(); ?>index.php/myControl/viewFeedback">Feedback</a></li>

                        <li ><a href="<?php echo base_url(); ?>index.php/myControl/viewFind">Temukan Kami</a></li>

                    </ul>

                </div>

            </div>

        </nav>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        

        

    <div class="container-fluid">
         
        
        <div class="row">
        

            <div class="col-sm-4" style="#">
           
            </div>
            
            <div class="col-sm-4" style="#">
                  <form class="" id="msform" method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>"  enctype="multipart/form-data" >
                        <div class="imgcontainer">
                          <!-- <img src="icon.png" alt="Avatar" class="avatar" width="30" height="30"> -->
                          <img src="<?php echo base_url(); ?>/assets/img/logom.png" alt="Avatar" class="avatar" width="75" height="75">
                          <H2>Form Feedback</H2> 
                        </div>

                        
                                <label><b>name</b></label>
                                <input type="text" placeholder="" name="nama" required>
                        
                           
                            <br/>

                                <label><b>email</b></label>
                                <input type="text" placeholder="" name="email" required>

                            <br/>
                                <label><b>Alamat</b></label>
                                <textarea name="alamat"> </textarea> 

                            <br/>
                                <label><b>comments</b></label>
                                <textarea name="komentar"> </textarea> 

                            <br/>

                                <label><b>Upload</b></label>
                                <input type="file" name="userfile" size="2000" />

                            <br/>
                            <br/>    

                              <input type="submit" value="SUBMIT" align="center"></input>
                        
                     
                </form>

                    <footer class="wrapper style1 align-center" background-color="black">
                        <div class="inner">
                            <ul class="icons">
                                
                                
                            </ul>
                            <p align="CENTER">&copy; Metropolist Barbershop <a href="<?php echo base_url(); ?>index.php/myControl/viewFind">Temukan Kami  !</a>.</p>
                        </div>
                    </footer>
            </div>
            <div class="col-sm-4" style="#">
                  
            </div>
        </div>
    </div>


    </body>
    <script type="text/javascript">
        // collapsibleHideFunction: function($ul, complete) { $ul.SlideUp(250, complete);
    </script>

    </html>

