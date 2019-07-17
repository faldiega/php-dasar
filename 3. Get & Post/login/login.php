<?php 
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){
	// cek username dan password
	if ( $_POST["username"] == "admin" && $_POST["password"] == "qwe123") {
		// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	}else{
		// jika salah, tampil kesalahan
		$error = true;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if (isset($error)) :?>
	<p style="color: red; font-style: italic;">username / password salah!</p>
<?php endif; ?>

<ul>
<form action="" method="POST">
	<li>
		<label for="user">Username: </label>
		<input type="text" name="username" id="user">
	</li>
	<li>
		<label for="pwd">Password: </label>
		<input type="password" name="password" id="pwd">
	</li>
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
</form>
</ul>
</body>
</html>