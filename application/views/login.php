
<div class="col-5" style="border: 1px solid red;">
	<h2>Login</h2>
	<form  method="post" enctype="multipart/form-data" >
	<input type="text" class="col-12 form" style="border: 1px solid red" placeholder="email"></p>
	<input type="text" class="col-12 form" style="border: 1px solid red" placeholder="password"></p>
	<input type="submit" class="btn btn-primary" name="kirim" value="login"><a class="m-2" href="<?php echo base_url() ?>index.php/Handler_c/routes?data=daftar">Daftar</a>
	</form>
	<?php echo $login; ?>
</div>