<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	// cek apakah data berhasil ditambah atau tidak
	if( ubah($_POST)>0 ) {
		echo "
			<script>
				alert('Data Berhasil diubah');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Gagal diubah');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>
	<h1>Update Data Mahasiswa</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>"> 
		<ul>
			<li>
				<label for="nm">Nama : </label>
				<input type="text" name="nama" id="nm" value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
			</li>
			<li>
				<label for="eml">Email : </label>
				<input type="text" name="email" id="eml" value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jur">Jurusan : </label>
				<input type="text" name="jurusan" id="jur" value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gmbr">Gambar : </label>
				<input type="text" name="gambar" id="gmbr" value="<?= $mhs["gambar"]; ?>">
			</li>
			<br><br>
			<button type="submit" name="submit">Update</button>
		</ul>
	</form>
</body>
</html>