

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="utf-8">

    <title>Metropolis Barbershop</title>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/skel.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style-xlarge.css" />



    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <title>Bootstrap 3 with Google Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->
 
    <style>
      #map-container { height: 300px }
    </style>
    


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

                        <li><a href="<?php echo base_url(); ?>index.php/myControl/viewShop" >Shop</a></li>

                        <li ><a href="<?php echo base_url(); ?>index.php/myControl/viewFeedback" >Feedback</a></li>

                        <li class="active"><a href="<?php echo base_url(); ?>index.php/myControl/viewFind">Temukan Kami</a></li>

                    </ul>

                </div>

            </div>

        </nav>

        <br/>
        <br/>
        <br/>

     <section class="wrapper style1 align-center" id="service">
                        <div class="inner">
                            <h2>TEMUKAN KAMI</h2>
                            <p><h4>Area Surabaya dan Sekitarnya</h4></p>
                        </div>
                        
    </section>                        
    <div class="container">
      <div class="row">
          <div id="map-outer" class="col-md-12">
              <div id="address" class="col-md-4">
                <h2>Metropolis Barbershop</h2>
                <address>
                <strong>Peggy Guggenheim Collection</strong><br>
                    Dorsoduro, 701-704<br>
                    30123<br>
                    Venezia<br>
                    Italia<br>
                    <abbr>P:</abbr> +39 041 240 5411
               </address>
               <address>
                <strong>Peggy Guggenheim Collection</strong><br>
                    Dorsoduro, 701-704<br>
                    30123<br>
                    Venezia<br>
                    Italia<br>
                    <abbr>P:</abbr> +39 041 240 5411
               </address>
              </div>
            <div id="map-container" class="col-md-8"></div>
          </div><!-- /map-outer -->
      </div> <!-- /row -->   
    <!-- <div id="map-container" class="col-md-6"></div> -->
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDbleH0YarorfGK3nL_dGu86MIJ4UhrQoo"></script>
    <script>    
 
      function init_map() {
        var var_location = new google.maps.LatLng(-7.298176, 112.756096);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 19
        };
 
        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"METROPOLIS BARBERSHOP"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
        var_marker.setMap(var_map); 
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
                    <footer class="wrapper style1 align-center" background-color="black">
                        <div class="inner">
                            <ul class="icons">
                                
                                
                            </ul>
                            <p>&copy; Metropolist Barbershop <a href="<?php echo base_url(); ?>index.php/myControl/viewFind">Temukan Kami  !</a>.</p>
                        </div>
                    </footer>

    </body>
   

    </html>

