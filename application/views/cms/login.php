<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body class="skin-blue">
	<div class="wrapper">
		<div class="content-wrapper">	
			<div class="wrapper container_full">	
				<div class="login-box">
					<div class="login-logo">
						mnlfuncup | <b>CMS</b>
				  	</div>
				  	<div class="login-box-body">
				    	<p class="login-box-msg">Sign in to start your session</p>	    			
				    	<form action="" method="post">
				    		<?php if(isset($error)) echo '<p class="text-red">'.$error."</p>";?>

							<?php echo form_error('username', '<p class="text-red">', '</p>'); ?>
				      		<div class="form-group has-feedback <?php echo (!empty(form_error('username')) ? 'has-error' : ''); ?>">
				        		<input type="text" id="" name="username" class="form-control" placeholder="Username">
				        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
				      		</div>

							<?php echo form_error('password', '<p class="text-red">', '</p>'); ?>
				      		<div class="form-group has-feedback <?php echo (!empty(form_error('password')) ? 'has-error' : ''); ?>">
				        		<input type="password" name="password" class="form-control" placeholder="Password">
				        		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				      		</div>
				      		<div class="row">
				        		<div class="col-xs-12">
				          			<button type="submit" class="btn btn-warning btn-block btn-flat">Sign In</button>
				        		</div>
				      		</div>
				    	</form>
				  	</div>
				</div>
			</div>
		</div>
		<footer class="main-footer">
		    <div class="pull-right hidden-xs">
		    	<b>Version</b> 1.0.0
		    </div>
		    <strong>Copyright © 2016-2017 <a href="#">TCGS</a>.</strong> All rights
		    reserved.
		</footer>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/jqueryui.js"></script>
	<script src="<?php echo base_url();?>assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/adminlte/dist/js/app.min.js"></script>
</body>
</html>