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
		<a href="<?php echo base_url() ?>index.php">Home</a>
		<div class="d-flex justify-content-center" style="">
			<?php include "$routes"; ?>
		</div>
	</div>
</body>
</html>