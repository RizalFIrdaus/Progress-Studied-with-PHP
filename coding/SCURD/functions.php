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

function tambah($tambah){
	global $db;
	$nama = htmlspecialchars($tambah["nama"]);
	$npm = htmlspecialchars($tambah["npm"]);
	$jurusan =htmlspecialchars($tambah["jurusan"]) ;
	$universitas = htmlspecialchars($tambah["universitas"]);
	$gambar = htmlspecialchars($tambah["gambar"]);
	$query ="INSERT INTO mahasiswa VALUES('','$nama','$npm','$jurusan','$universitas','$gambar')";
	$main = mysqli_query($db,$query);

	return mysqli_affected_rows($db);
}


function hapus($id){
	global $db;
	mysqli_query($db,"DELETE FROM mahasiswa WHERE id=$id");
	return mysqli_affected_rows($db);
}

function update($update){
	global $db;
	$id = $_GET["id"];
	$nama = htmlspecialchars($update["nama"]);
	$npm = htmlspecialchars($update["npm"]);
	$jurusan =htmlspecialchars($update["jurusan"]) ;
	$universitas = htmlspecialchars($update["universitas"]);
	$gambar = htmlspecialchars($update["gambar"]);
	// $query ="INSERT INTO mahasiswa VALUES('','$nama','$npm','$jurusan','$universitas','$gambar')";
	$query = "UPDATE mahasiswa SET $nama,$npm,$jurusan,$universitas,$gambar WHERE id=$id"  ;
	mysqli_query($db,$query);
	return mysqli_affected_rows($db);

}


 ?>