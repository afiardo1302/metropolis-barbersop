<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/myControl/viewLogin');
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin - Metropolis</title>

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
				<a class="navbar-brand" href="#"><span>METROPOLIST</span>  Barbershop</a>
				<ul class="user-menu">
					
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">
			<li ><a href="<?php echo base_url(); ?>index.php/crud/index"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel feedback</a></li>
			<li class="active"><a href="<?php echo base_url(); ?>index.php/crud_produk/indexAdmin"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tabel Produk </a></li>
			<li><a href="<?php echo base_url(); ?>index.php/myControl/viewFormProduk"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/myControl/viewFormAddAkun"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms Tambah Admin</a></li>
	
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo base_url(); ?>index.php/myControl/logout"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Logout</a></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tabel Produk</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tabel Produk</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
							    <tr>
							        <th data-field="nama" data-sortable="true" >Kode Produk</th>
							        <th data-field="email" data-sortable="true">Nama Produk</th>
							        <th data-field="alamat"  data-sortable="true">Harga</th>
							        <th data-field="komentar" data-sortable="true">Deskripsi</th>
							        <th data-field="gambar" data-sortable="true">Gambar</th>
							        <th data-field="action1" data-sortable="true">Action1</th>
							        <th data-field="action2" data-sortable="true">Action2</th>
							    </tr>
						    </thead>
						    <?php foreach ($data as $p) {
								# code...?>
							<tr>
								<td><?php echo $p['kode_produk']; ?></td>
								<td><?php echo $p['nama_produk']; ?></td>
								<td><?php echo $p['harga_produk']; ?></td>
								<td><?php echo $p['deskripsi']; ?></td>
								<td> <img src="<?php echo base_url('uploads/'.$p['img_produk']); ?>" height="42" width="42" />  </td>
								<td align="center"><a href="<?php echo base_url()."index.php/myControl/viewFormEdit/".$p['kode_produk']; ?>"><button>EDIT</button></a></td>
								<td align="center"><a href="<?php echo base_url()."index.php/crud_produk/do_delete/".$p['kode_produk']; ?>"><button>DELETE</button></a></td>
								
								
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
		
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
