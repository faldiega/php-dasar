<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}

require 'functions.php'; 

// Pagination
//konfigurasi
$jmlDataPerHal = 2;
$jmlData = count(query("SELECT * FROM mahasiswa")); //count = menghitung berapa banyak nilai array. karena dalam function query yang dikembalikan adalah array.

$jmlHal = ceil($jmlData / $jmlDataPerHal);
//round = pembulatan pecahan ke bilangan terdekat
//floor = pembulatan pecahan ke bawah
// ceil = pembulatan pecahan ke atas

$halAktif = (isset($_GET["hal"])) ? $_GET["hal"] : 1;
$awalData = ($jmlDataPerHal * $halAktif) - $jmlDataPerHal;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jmlDataPerHal");

if( isset($_POST["btn-cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}
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
	<a href="logout.php">Logout</a>
	<h1>Daftar Mahasiswa</h1> 
	<button><a href="tambah.php">Tambah Data</a></button>
	<br><br>

	<form action="" method="post">
		<label>Cari data mahasiswa</label>
		<input type="text" name="keyword" size="25" autofocus placeholder="masaukkan keyword..." autocomplete="off">
		<button type="submit" name="btn-cari">Cari</button>
	</form><br>

	<!-- Navigasi Pagination -->
	<?php if($halAktif > 1) : ?>
	<a href="?hal=<?= $halAktif-1; ?>">&laquo</a>
	<?php endif; ?>

	<?php for($i=1; $i<=$jmlHal; $i++) : ?>
		<?php if($i == $halAktif) : ?>
			<a href="?hal=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
		<?php else : ?>
			<a href="?hal=<?= $i; ?> "><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>
	
	<?php if($halAktif < $jmlHal) : ?>
		<a href="?hal=<?= $halAktif+1; ?>">&raquo</a>
	<?php endif; ?>

	<br>

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
				<button><a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></button>
				<button><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a></button>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
</body>
</html>