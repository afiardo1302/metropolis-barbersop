<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/myControl/viewLogin');
    }
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Forms</title>

<link href="<?php echo base_url(); ?>/assets/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/admin/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/admin/css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/admin/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url(); ?>/assets/admin/js/lumino.glyphs.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Metropolis</span>Barbershop</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			
			<li class=""><a href="<?php echo base_url(); ?>index.php/crud/index"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel feedback</a></li>
			<li class="active"><a href="<?php echo base_url(); ?>index.php/crud_produk/indexAdmin"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel Produk </a></li>
			<li><a href="<?php echo base_url(); ?>index.php/myControl/viewFormProduk"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>

			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo base_url(); ?>index.php/myControl/logout"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>
		<div class="attribution">Template by <a href="http://www.medialoot.com/item/lumino-admin-bootstrap-template/">Medialoot</a><br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Forms Edit Produk</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Form Edit Produk</div>
						<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="<?php echo base_url()."index.php/crud_produk/updateProduk"; ?>"  enctype="multipart/form-data">
							
								<div class="form-group">
									<label>Kode Produk</label>
									<input class="form-control"  name="kode_produk" value="<?php echo $kode_produk ?>" >
								</div>
								<div class="form-group">
									<label>Nama Produk</label>
									<input class="form-control"  name="nama_produk" value="<?php echo $nama_produk ?>" >
								</div>
								<div class="form-group">
									<label>Harga Produk</label>
									<input class="form-control"  name="harga_produk" value="<?php echo $harga_produk ?>" >
								</div>
								<div class="form-group">
									<label>File input</label>
									<input type="file" name="fileProduk" size="2000" value="<?php echo base_url('uploads/') ?>">
									 <p class="help-block">Example block-level help text here.</p>
								</div>
								
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea  class="form-control" name="deskripsi" rows="3"></textarea>
								</div>
								<div class="form-group">
									
									<input type="submit" value="SUBMIT" align="center"></input>
								</div>									
								 
								<button type="submit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="<?php echo base_url(); ?>/assets/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>/assets/admin/js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
