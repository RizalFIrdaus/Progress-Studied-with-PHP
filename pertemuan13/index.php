<?php 
require'functions.php';
$data_keluarga = query("SELECT * FROM kartukeluarga");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>HTML</title>
	<link rel="stylesheet" href="../pertemuan13/css/style.css">
</head>
<body>

<div class="container">
	<div class="judul">
		<h1>KARTU KELUARGA</h1>
	</div>
</div>

	<div class="menu">
		<ul>
			
				<li><a href="insert.php">Insert Data</a></li>
		
		
				<li><a href="index.php">Back to Home</a> </li>
		
			
		</ul>
	</div>



<div class="container">
	<div class="table">
		<table cellspacing="0" cellpadding="20" border="1">
		<tr>
			<th>EDIT</th>
			<th>No.</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
			<th>Foto</th>
		</tr>
		<?php $i =1; ?>
		<?php foreach ( $data_keluarga as $data ) : ?>
		<tr>
			<td style="background-color: lightgreen;"><a href="update.php?id=<?= $data["id"]; ?>">Update</a>
			<br>
			<br
			><a href="delete.php?id=<?= $data["id"]; ?>" onclick="return confirm('Kamu yakin ingin menghapus data ini ? ')">Delete</a></td>

			<td><?= $i; ?></td>
			<td><?= $data["nama"]; ?></td>
			<td><?= $data["nik"]; ?></td>
			<td><?= $data["kelamin"]; ?></td>
			<td><?= $data["lahir"]; ?></td>
			<td><?= $data["tanggal"]; ?></td>
			<td><?= $data["agama"]; ?></td>
			<td><?= $data["foto"]; ?></td>
		</tr>


		<?php $i++; ?>
		<?php endforeach ?>
		</table>
	</div>
</div>


	
</body>
</html>