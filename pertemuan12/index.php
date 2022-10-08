<?php 
// Untuk menguhubungkan ke file functions.php
require'functions.php';
$data_mhs=query("SELECT* FROM mahasiswa ");

if (isset($_POST["submit"])) {
	# code...
	$data_mhs = cari($_POST["keyword"]);
}


 ?>
 <?php echo"Min"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>ADMIN</title>
	<link rel="stylesheet" href="../css/tabelmahasiswa.css">
</head>
<body>
	<h1>DAFTAR MAHASISWA</h1>
	<a href="tambah.php">Insert Data</a>

	<a href="../Web/index.php">Kembali ke Beranda</a>

	<form action="" method="post">
		<input type="text" name="keyword" placeholder="Masukan nama mahasiswa.." autofocus autocomplete="off" >
		<button type="submit" name="submit">Search</button>
	</form>
	
		
	
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
			<td><a href="update.php?i=<?= $mhs["id"]; ?>">Update</a>
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