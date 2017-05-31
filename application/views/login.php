<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/fb.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/fb1.js"></script>

<title>Login</title>
<style type="text/css">
table{
	position: absolute;
	height: 100px;
	top: 50%;
	left: 50%;
	margin: -100px 0 0 -150px;
}
</style>
</head>
<body>
	 <div class="row">
        

	            <div class="col-sm-4" style="#">
	           
	            </div>
		   		<div class="col-sm-4" style="#">
					 <div class="imgcontainer">
					       <H2><img src="<?php echo base_url(); ?>/assets/img/logom.png" alt="Avatar" class="avatar" width="50" height="50">Form Login</H2>  
						    
		     		</div>	
		 		</div>
		 		<div class="col-sm-4" style="#">
	           
	            </div>
	</div>	
	<form method="post" id="myNavbar" action="<?php echo base_url().'index.php/myControl/login'?>">
		
		<table>
					     
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
			<tr>
				<!-- <td colspan="2"><?php echo $err_message;?></td>  -->
			</tr>
		</table>
	</form>
</body>
</html>