<?php 
if (isset($_POST["submit"])) {
	if ($_POST["username"]=="rizal.firdaus117@gmail.com" && $_POST["password"]=="phpisthebestprogramlanguage") {
		header("Location: ../Akses Admin/admin.php");
	}
	else if($_POST["username"]=="esan.ganteng123@gmail.com" && $_POST["password"]=="esanbau"){
		header("Location: tamu.php");
	}
	else{
		$error=true;
	}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>LOGIN</title>
</head>
<body>
	
	<form action="" method="post">
		<h1>Login Email</h1>
		<label for="email" >Email :</label>
		<input type="text" name="username" id="username">
		<br>
		<br>
		<label for="password">Password :</label>
		<input type="password" name="password" id="password">	
		<br>
		<br>
		<button type="submit" name="submit">Login</button>
	
		<?php if (isset($error)) :?>
			<p>Email atau password yang anda masukan salah !</p>
		<?php endif ?>
	</form>
</body>
</html>