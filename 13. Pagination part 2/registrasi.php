<?php 
require 'functions.php';

if( isset($_POST["register-btn"]) ){
	if( register($_POST) > 0 ){
		echo "<script>
				alert('User baru berhasil ditambahkan.');
			  </script>";
	}else{
		echo mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrasi</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
	<h1>Halaman Registrasi</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username">
			</li><br>
			<li>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password">
			</li><br>
			<li>
				<label for="password2">Konfirmasi Password:</label>
				<input type="password" name="password2" id="password2">
			</li><br>
			<li>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email">
			</li>
			<br><br>
			<li><button type="submit" name="register-btn">Register</button></li>
			<li>
				<p>Sudah punya akun? Login <a href="login.php">disini</a></p>
			</li>
		</ul>
	</form>
</body>
</html>