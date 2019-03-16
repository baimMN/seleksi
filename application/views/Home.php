<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" name="viewport" content="width:devide-width inital-scale:1.0" />
	<title>Seleksi</title>

	<script src="<?php echo base_url(); ?>bs/jquery-3.3.1.slim.min.js"></script>  
	<script src="<?php echo base_url() ?>bs/js/bootstrap.js"></script>
	<script src="<?php echo base_url() ?>bs/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>bs/popper.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/sass/scss/compiled/modify.css" />

	
	<style type="text/css">
		.kanvas {
			background: url(<?php echo base_url() ?>/image/background.jpg); 
			background-attachment: fixed;
			background-size: cover; 
			background-repeat: no-repeat;
			height: 100%;
			position: fixed;
			width: 100%;
			z-index: -9999;

			}

		html,body {
			height: 100%;}


	</style>
</head>
<body>
	<div class="kanvas"></div>
	<div class="container">
		<div class="row">
			<div class="slider col-12" style="height: 300px; border: 1px solid red"></div>
		</div>

		<div class="row">
			<button class="col-12 btn btn-primary" 
			onclick=
			'window.location.href="<?php echo base_url() ?>index.php/Handler_c/routes?data=logform"'
			style="text-align: center;">
				<h4>Login Sekarang</h4>
			</button>
			
		</div>

		<div class="row">
			<div class="body"></div>
		</div>

		<div class="row">
			<div class="footer"></div>
		</div>
	</div>
</body>
</html>