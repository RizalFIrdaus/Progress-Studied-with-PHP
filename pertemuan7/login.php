<?php 
if ( isset($_POST["submit"]) ) {
	if ($_POST["username"] == "rizal300500" &&  $_POST["password"]=="preskot117") {
		header("Location: admin.php");
		exit;
	}
	else if($_POST["username"] == "esan123" && $_POST["password"]=="123"){
		header("Location: client.php");
		exit;
	}
	else{
		$salah = true;
	}

}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>HTML</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	
	<br>
		<div class="form">
			<form action="" method="post">
				<h1 style="margin-left: 50px;">Login Form</h1>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username"> 
				<br>
				<br>
				<label for="password" class="pass">Password :</label>
				<input type="password" name="password" id="password" >
				<br>
				<br>
				<button type="submit" name="submit">Login</button>
				<?php if (isset($salah)) : ?>
	<p style="color:red;font-style: italic;" class="error">Username atau Password yang anda masukan salah !</p>
	<?php endif ?>
			</form>
		</div>
	
</body>
</html>