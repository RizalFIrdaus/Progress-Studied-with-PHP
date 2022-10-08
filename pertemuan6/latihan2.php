<?php 
// $mahasiswa = [
// 	["Muhammad Rizal Firdaus","54418907","Teknik Informatika","Universitas Gunadarma"],
// 	["Fahmi Ihsan Firdaus","54418907","Teknik Informatika","Universitas Indonesia"],

// ];
// belajar array associative
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
echo $identitas[1]["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar</title>

	<style>
		.clear{
			list-style: none;
		}
	</style>
</head>
<body>
	<h1>Kartu Tanda Penduduk</h1>
	<br>
	<?php foreach($identitas as $ident): ?>
		
			<ul>
				<li class="clear"><img src="../img/<?= $ident["gambar"]; ?>" alt="kepo"></li>
				<li>Nama :<?= $ident["nama"] ?></li>
				<li>NIK  :<?= $ident["NIK"] ?></li>
				<li>Alamat :<?= $ident["alamat"] ?></li>
				<li>Kota :<?= $ident["kota"] ?></li>

			</ul>
			
		
<?php endforeach ?>
</body>
</html>



