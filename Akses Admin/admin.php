<?php 
require'function.php';
$data_mhs=query("SELECT * FROM mahasiswa");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="../Web/login.php">Kembali</a>

<table border="1" cellpadding="20" cellspacing="0">
	
	<tr>
		<th>No</th>
		<th>Edit</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>NPM</th>
		<th>Jurusan</th>
		<th>Universitas</th>
	</tr>
	<?php $i=1; ?>
<?php foreach ($data_mhs as $mahasiswa): ?>
	

	<tr>
		<td><?= $i; ?></td>
		<td><a href="">Update</a><br><br><a href="">Delete</a></td>
		<td><?= $mahasiswa["gambar"]; ?></td>
		<td><?= $mahasiswa["nama"]; ?></td>
		<td><?= $mahasiswa["npm"]; ?></td>
		<td><?= $mahasiswa["jurusan"]; ?></td>
		<td><?= $mahasiswa["universitas"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach ?>
</table>

</body>
</html>