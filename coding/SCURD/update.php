<?php 
require'functions.php';

if (isset($_POST["submit"])) {
	
	if( update($_POST)>0 ){

		echo "<script>
			alert('Berhasil Di Update');
			document.location.href='index.php';
			</script>
		";
	}
	else{
			echo "<script>
			alert('Gagal Di Update ! ');
			document.location.href='index.php';
			</script>
		";
	}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Update Data</title>
</head>
<body>
	<h1>Update Mahasiswa</h1>
	<form action="" method="post">
		<fieldset>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama">
		</fieldset>
		<fieldset>
			<label for="npm">NPM :</label>
			<input type="text" name="npm" id="npm">
		</fieldset>
		<fieldset>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan">
		</fieldset>
		<fieldset>
			<label for="universitas">Universitas</label>
			<input type="text" name="universitas" id="universitas">
		</fieldset>
		<fieldset>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</fieldset>
		<button type="submit" name="submit">Update</button>

	</form>
</body>
</html>