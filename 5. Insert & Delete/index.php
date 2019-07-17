<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		a{text-decoration: none}
	</style>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<button><a href="tambah.php">Tambah Data</a></button>
	<br><br>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach($mahasiswa as $row) :?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["npm"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
			<td><img src="img/<?= $row["gambar"]; ?>" height="70"></td>
			<td>
				<button><a href="">Ubah</a></button>
				<button><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a></button>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
</body>
</html>