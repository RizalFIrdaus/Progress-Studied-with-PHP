<?php 
$connect = mysqli_connect("localhost","root","","bekateceria");

function query ( $query ) {
	global $connect;
	$data_keluarga = [];
	$result = mysqli_query($connect,$query);
	while ( $data = mysqli_fetch_assoc($result) ) {

		$data_keluarga[] = $data ;

	}
return $data_keluarga;
}

function insert($data) {

	global $connect;

	$nama = htmlspecialchars($data["nama"]);
	$nik = htmlspecialchars($data["nik"]);
	$kelamin = htmlspecialchars($data["kelamin"]);
	$lahir = htmlspecialchars($data["lahir"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$agama =htmlspecialchars($data["agama"]);
	$foto = htmlspecialchars($data["foto"]);

	$query ="INSERT INTO kartukeluarga VALUES ('','$nama','$nik','$kelamin','$lahir','$tanggal','$agama','$foto')";

	mysqli_query($connect,$query);


	return mysqli_affected_rows($connect);

}

function delete($data){

	global $connect;

	$query = "DELETE FROM kartukeluarga WHERE id=$data";
	mysqli_query($connect,$query);

	return mysqli_affected_rows($connect);
}

function update($data){

	global $connect;

	$id = $data["id"];  
	$nama = htmlspecialchars($data["nama"]);
	$nik = htmlspecialchars($data["nik"]);
	$kelamin = htmlspecialchars($data["kelamin"]);
	$lahir = htmlspecialchars($data["lahir"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$agama =htmlspecialchars($data["agama"]);
	$foto = htmlspecialchars($data["foto"]);

	$query = "UPDATE kartukeluarga SET nama='$nama' ,nik='$nik',kelamin='$kelamin',lahir='$lahir',tanggal='$tanggal',agama='$agama',foto='$foto' WHERE id=$id" ;

	mysqli_query($connect,$query);

	return mysqli_affected_rows($connect);  

}













 ?>