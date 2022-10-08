<?php 
if (!isset($_GET["nama"])||!isset($_GET["NIK"])||!isset($_GET["alamat"])||!isset($_GET["kota"])

){
	// Header untuk menuju lokasi ang di tuju
	header("Location:latiha2.php");
	exit;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>HTML</title>
	<style>
		.clear{
			list-style: none;
		}
	</style>
</head>
<body>
	<h1>Detail KTP</h1>
	<ul>
		<li class="clear"><img src="../img/<?= $_GET["gambar"]; ?>" alt="kepo"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["NIK"]; ?></li>
		<li><?= $_GET["alamat"]; ?></li>
		<li><?= $_GET["kota"]; ?></li>
	</ul>
	<p><a href="latiha2.php">Kembali</a></p>
</body>
</html>