<?php 
require'functions.php';

if (isset($_POST["submit"])) {
	if ( insert($_POST) > 0 ){
		echo "<script>
			alert(' Data berhasil di tambah ');
			document.location.href='index.php';
		</script>";
	}
	else{
		echo "<script>
			alert(' Data yang anda masukan salah ! ');
		</script>";
	}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Insert Data</title>
</head>
<body>
	<h1>Insert Data Kartu Keluarga</h1>
	<form action="" method="post">
		<ul>
			<li><label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" autocomplete=
				"off">
			</li>
			<li><label for="nik">NIK :</label>
				<input type="text"  name="nik" id="nik" autocomplete=
				"off">
			</li>
			<li><label for="kelamin">Jenis Kelamin :</label>
				<input type="text" name="kelamin"  id="kelamin" autocomplete=
				"off">
			</li>
			<li><label for="lahir">Tempat Lahir :</label>
				<input type="text"  name="lahir" id="lahir" autocomplete=
				"off">
			</li>
			<li><label for="tanggal">Tanggal Lahir :</label>
				<input type="text" name="tanggal" id="tanggal" autocomplete=
				"off">
			</li>
			<li><label for="agama">Agama :</label>
				<input type="text"  name="agama" id="agama" autocomplete=
				"off">
			</li>
			<li><label for="foto">Foto :</label>
				<input type="text" name="foto" id="foto" autocomplete=
				"off">
			</li>
			<br>

			<button type="submit" name="submit"> Insert  </button>
			<button><a href="index.php">Back</a></button>

			
		</ul>
	</form>
</body>
</html>