<?php 
// SuperGlobals
// GET
// Mengisi GET dengan cara 1
// $_GET ["nama"]="Muhammad Rizal Firdaus";
// $_GET ["npm"]="54418907";
// $_GET ["univ"]="Universitas Gunadarma";
// $_GET ["jurusan"]="Teknik Informatika";
// Mengisi GET dengan cara 2
// http://localhost:8080/belajarphp/pertemuan7/latiha2.php?nama=Muhammad%20Rizal%20Firdaus&npm=54418907



$identitas = [
				[
				"NIK" => "43852302051352",
				"nama" => "Muhammad Rizal Firdaus",
				"alamat" => "Pondok Bambu",
				"kota" => "DKI Jakarta",
				"gambar" => "2.jpg"
				],
				[
				"nama" => "Fahmi Ihsan Firdaus",
				"NIK" => "124322051352",
				"alamat" => "Margonda",
				"kota" => "Depok",
				"gambar" => "a.gif"
				]

			];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 <ul>
 	<?php foreach ($identitas as $i) : ?>
		<li><a href="latihan3.php?nama=<?= $i["nama"]; ?>&NIK=<?= $i["NIK"]; ?>&alamat=<?= $i["alamat"] ?>&kota=<?= $i["kota"] ?>"><?= $i["nama"] ?></a></li>

 	<?php endforeach ?>

 </ul>
 </body>
 </html>