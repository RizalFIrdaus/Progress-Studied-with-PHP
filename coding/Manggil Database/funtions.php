<?php 
$db = mysqli_connect("localhost","root","","test");

function query($query){

	global $db;
	$result = mysqli_query($db,$query);
	$family=[];

	while ($family_while = mysqli_fetch_assoc($result)) {
		$family[] = $family_while;
	}

return $family;


}




 ?>