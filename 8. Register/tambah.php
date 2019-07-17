<?php 
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// cek apakah data berhasil ditambah atau tidak
	if( tambah($_POST)>0 ) {
		echo "
			<script>
				alert('Data Berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Gagal ditambahkan');
				document.location.href = 'index.php';
			</script>
		";
	}
	// tambah($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nm">Nama : </label>
				<input type="text" name="nama" id="nm">
			</li>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm" required>
			</li>
			<li>
				<label for="eml">Email : </label>
				<input type="text" name="email" id="eml">
			</li>
			<li>
				<label for="jur">Jurusan : </label>
				<input type="text" name="jurusan" id="jur">
			</li>
			<li>
				<label for="gmbr">Gambar : </label>
				<input type="text" name="gambar" id="gmbr">
			</li>
			<li>
				<button type="submit" name="submit">Submit</button>
			</li>
		</ul>
	</form>
</body>
</html>