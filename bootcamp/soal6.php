<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>	
		.perolehan{
			width: 40%;
		}
		.tombol {
			text-align: center;
			width: 50%;
			align-self: center;
			margin: auto;
			border-radius: 13px;
			background-color: red;
			font-size: larger;
			transition: 0.4s;
			color: white;
			box-shadow: 0px 0.5px 5px 0px black;
			border: 1px solid black;
		}
		
		.border-frame {
			background-image: linear-gradient(to bottom right,red,white,red);
			height: 100%;
			width: 100%;
			border-radius: 10px;
		}

		.borderr {
			width: 100%;
			background-color: white;
			border-radius: 10px;
			height: 100%;
		}


		.tombol:hover {
			background-color: white;
			color: red;
		}

		.img {
			position: fixed;
			background-image: url(pemilu.jpg);
			width: 100%;
			height: 100%;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			top: 0px;
			left: 0px;
			filter: blur(5px);
		}
	</style>

<body>
<div class="container-fluid">
	<div class="img"></div>
	<div class="row justify-content-center mt-5" style="height:100%;">
		<div class="col-12 col-lg-7">
			<div class="border-frame p-2">
			<div class="borderr">
				<div class="w-100" style="text-align: center;"><h1>Aplikasi Hitung Suara</h1></div>
				<?php 	
					$co=mysqli_connect("localhost","root","","seleksi") or die('sistem tidak terhubung');
					$query=mysqli_query($co,"select * from candidates");
					while ($g=mysqli_fetch_assoc($query)):
				?>	
					<table class="table  table-bordered  ">
						<tr>
							<td> <?=$g['name']?> </td>
							<td rowspan="2" class="perolehan p-0"> <a href="?data=<?=$g['id']?>&id=<?=$g['earned_vote']?>"><div class="tombol p-2 mt-4">Tambah</div></a> </td>
						</tr>	
						<tr>
							<td>Perolehan Suara: <?=$g['earned_vote']?> </td>
						</tr>

					</table>	
				<?php endwhile;
				 ?> 	
				 <?php if(isset($_GET['data'])){
					$co=mysqli_connect("localhost","root","","seleksi") or die('sistem tidak terhubung');
					$id=$_GET['data'];
					$vote=$_GET['id'];
					$quer=mysqli_query($co,"UPDATE `candidates` SET `earned_vote` ='$vote'+1  WHERE `candidates`.`id` = '$id'");
					if(count($quer) > 0)
					{echo "<h1>Sukses</h1>";}
				} ?>
				</div>
				</div>
			</div>
	</div>
</div>


</body>
</html>