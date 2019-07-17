<?php 
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) || 
	!isset($_GET["npm"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["email"])) {
	// redirect (untuk pindah halaman)
	header("Location: latihan7-1.php");
	exit;
}
?>

<!DOCTYPE html>
<head>
	<title>Detail Mahasiswa</title>
</head>
<body>
	
<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
	<li><?= $_GET["nama"]; ?></li>
	<li><?= $_GET["npm"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
</ul>

<a href="latihan7-1.php">Kembali</a>
</body>
</html>