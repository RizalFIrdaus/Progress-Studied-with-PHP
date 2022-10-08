<?php 

require'functions.php';

$id = $_GET["id"];

$ubah = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if (isset($_POST["submit"])) {
	
	if (update($_POST)>0){
   		echo "<script>
   			 	alert('Successfully Changed ');
   			 	document.location.href='index.php';
	          </script>
   		";
   	}
   	else {
   		echo "<script>
   			 	alert('Failed !!');
	          </script>
   		";

   }

}




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Update data Mahasiswa</title>
</head>
<body>
	<h1>Update Data Mahasiswa</h1>
	<form action="" method="post">
		<fieldset>
			<input type="hidden" name="id" value="<?= $ubah["id"]; ?>">
			<label for="nama">Masukan Nama :</label>
			<input type="text" name="nama" id="nama" required="nama" value="<?= $ubah["nama"] ?>">
		</fieldset>
		<fieldset>
			<label for="npm">Masukan NPM :</label>
			<input type="text" name="npm" id="npm" required="npm"  value="<?= $ubah["npm"] ?>">
		</fieldset>
		<fieldset>
			<label for="jurusan">Masukan Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required="jurusan" value="<?= $ubah["jurusan"] ?>">
		</fieldset>
		<fieldset>
			<label for="universitas">Masukan Universitas :</label>
			<input type="text" name="universitas" id="universitas" required="jurusan" value="<?= $ubah["universitas"] ?>">
		</fieldset>
		<fieldset>
			<label for="gambar">Masukan Gambar(Optional) : </label>
			<input type="text" name="gambar" id="gambar" value="<?= $ubah["gambar"] ?>">
		</fieldset>
		<button type="submit" name="submit" onclick="return confirm('Apakah data yang anda isikan sudah benar ?');">Update</button>
		<button><a href="index.php">Batal Update</a></button>


	</form>
</body>
</html>