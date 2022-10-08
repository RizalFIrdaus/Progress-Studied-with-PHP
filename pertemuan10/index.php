<?php 
// Untuk menguhubungkan ke file functions.php
require'functions.php';
$data_mhs=query("SELECT* FROM mahasiswa");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>ADMIN</title>
</head>
<body>
	<h1>DAFTAR MAHASISWA</h1>
	<a href="tambah.php">Insert Data</a>
	<br>
	<a href="../Web/index.php">Kembali ke Beranda</a>
	
	
		
	
	<table border="1" cellpadding="20" cellspacing="" ="0">
		
		<tr>
			<th>No</th>
			<th>Edit</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Jurusan</th>
			<th>Universitas</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($data_mhs as $mhs) :?>
			
		<tr>
			<td><?= $i ?></td>
			<td><a href="">Update</a>
				<br> 
				<br>
				<a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick = "return confirm('Apakah anda yakin ingin menghapus data ini ?');" >Delete</a>
				</td>
			<td><img src="../img/<?= $mhs["gambar"]; ?>" width="200px;"></td>
			<td><?= $mhs["nama"] ?></td>
			<td><?= $mhs["npm"] ?></td>
			<td><?= $mhs["jurusan"] ?></td>
			<td><?= $mhs["universitas"] ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ?>
	</table>

</body>
</html>