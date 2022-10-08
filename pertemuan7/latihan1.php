<?php 
// variabel scope
$x = 10;

function coba(){
	global $x;
	echo $x;

}
coba();


// Super Global PHP = ARRAY ASSOSSIATIVE
/*
$_GET
$_POST
$_REQUEST
$_SESSION
$_COOKIE
$_SERVER
$_ENV

*/
 ?>