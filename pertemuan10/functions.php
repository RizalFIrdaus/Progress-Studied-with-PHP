<?php 
$db = mysqli_connect("localhost","root","","belajarphp");



function query($query){
	global $db;
	$result = mysqli_query($db,$query);
	$data_mhs =[];
	while ($data = mysqli_fetch_assoc($result)) {
		$data_mhs[] =$data;
	}
	return $data_mhs;
}


function insert($insert){
	global $db;
	$nama = htmlspecialchars($insert["nama"]);
	$npm = htmlspecialchars($insert["npm"]);
	$jurusan = htmlspecialchars($insert["jurusan"]);
	$universitas = htmlspecialchars($insert["universitas"]);
	$gambar = htmlspecialchars($insert["gambar"]);

	$query= "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$jurusan','$universitas','$gambar')";

    mysqli_query($db,$query);


    return mysqli_affected_rows($db);
}

function delete($id){

	global $db;
	mysqli_query($db,"DELETE FROM mahasiswa WHERE id=$id");
	return mysqli_affected_rows($db);
}


 ?>