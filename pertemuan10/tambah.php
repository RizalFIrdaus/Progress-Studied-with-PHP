<?php 

require'functions.php';

if (isset($_POST["submit"])) {
	
	if (insert($_POST)>0){
   		echo "<script>
   			 	alert('Berhasil Ditambah ');
   			 	document.location.href='index.php';
	          </script>
   		";
   	}
   	else {
   		echo "<script>
   			 	alert('Gagal Ditambah ');
	          </script>
   		";

   }

}




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Tambah data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<fieldset>
			<label for="nama">Masukan Nama :</label>
			<input type="text" name="nama" id="nama" required="nama">
		</fieldset>
		<fieldset>
			<label for="npm">Masukan NPM :</label>
			<input type="text" name="npm" id="npm" required="npm">
		</fieldset>
		<fieldset>
			<label for="jurusan">Masukan Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required="jurusan">
		</fieldset>
		<fieldset>
			<label for="universitas">Masukan Universitas :</label>
			<input type="text" name="universitas" id="universitas" required="jurusan">
		</fieldset>
		<fieldset>
			<label for="gambar">Masukan Gambar(Optional) : </label>
			<input type="text" name="gambar" id="gambar">
		</fieldset>
		<button type="submit" name="submit" onclick="return confirm('Apakah data yang anda isikan sudah benar ?');">Insert</button>


	</form>
</body>
</html>