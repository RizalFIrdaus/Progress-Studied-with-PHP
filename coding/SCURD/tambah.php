<?php 
require'functions.php';
if (isset($_POST["submit"])) {
	
	if( tambah($_POST)>0 ){

		echo "<script>
			alert('Berhasil Ditambah');
			document.location.href='index.php';
			</script>
		";
	}
	else{
			echo "<script>
			alert('Gagal Ditambah ! ');
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
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Mahasiswa</h1>
	<form action="" method="post">
		<fieldset>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required="nama">
		</fieldset>
		<fieldset>
			<label for="npm">NPM :</label>
			<input type="text" name="npm" id="npm" required="npm">
		</fieldset>
		<fieldset>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" required="jurusan">
		</fieldset>
		<fieldset>
			<label for="universitas">Universitas</label>
			<input type="text" name="universitas" id="universitas" required="universitas">
		</fieldset>
		<fieldset>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</fieldset>
		<button type="submit" name="submit">Add</button>

	</form>
</body>
</html>