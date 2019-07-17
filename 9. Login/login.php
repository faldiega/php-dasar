<?php 
require 'functions.php';

if(isset($_POST["login-btn"])){
	$username = $_POST["username"];
	$pass = $_POST["password"];

	$res = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");
	
	//cek username
	if(mysqli_num_rows($res)===1){
		
		//cek password
		$row = mysqli_fetch_assoc($res);
		if(password_verify($pass, $row["password"])){
			header("Location: index.php");
			exit;
		}
	}
	$error = true;
}
?>
<!DOCTYPE html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if(isset($error)): ?>
		<p style="color: red; font-style: italic;">Username atau password salah!</p>
	<?php endif; ?>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username atau email..">
			</li><br>
			<li>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password..">
			</li><br>
			<li>
				<button type="submit" name="login-btn">Login</button>
			</li>
			<li>
				<p>Belum memiliki akun? Registrasi <a href="registrasi.php">disini</a></p>
			</li>
		</ul>
	</form>
</body>
</html>