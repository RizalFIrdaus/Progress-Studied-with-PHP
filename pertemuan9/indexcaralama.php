<?php 
// Koneksikan ke database
$db = mysqli_connect("localhost","root","","belajarphp");
// Lalu ambil data tabel mahasiswa
$result=mysqli_query($db,"SELECT * FROM mahasiswa");

// Cara menampilkan isi dari tabel yaitu dengan 4 cara
// mysqli_fetch_row() // Mengembalikan array numerik
// mysqli_fetch_assoc() //Mengembalikan array assossiative
// mysqli_fetch_array() //Mengembalikan array numerik dan assossiative
// mysqli_fetch_object() 

// while($data=mysqli_fetch_assoc($result)){
// var_dump($data);
// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>ADMIN</title>
</head>
<body>
	<h1>DAFTAR MAHASISWA</h1>
	
		
	
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
		<?php while($data = mysqli_fetch_assoc($result)) :?>
			
		<tr>
			<td><?= $i ?></td>
			<td><a href="">Update</a>
				<br> 
				<br>
				<a href="">Delete</a>
				</td>
			<td>1.jpg</td>
			<td><?= $data["nama"] ?></td>
			<td><?= $data["nrp"] ?></td>
			<td><?= $data["jurusan"] ?></td>
			<td><?= $data["universitas"] ?></td>
		</tr>
		<?php $i++; ?>
	<?php endwhile ?>
	</table>

</body>
</html>