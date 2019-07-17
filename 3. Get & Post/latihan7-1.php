<?php 
// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative

// $_GET
$mahasiswa = [
	[
		"nama" => "Naufaldi Egaputra",
		"npm" => "55415011", 
		"jurusan" => "Teknik Informatika", 
		"email" => "ega@email.com",
		"gambar" => "ega.jpg"
	],
	[
		"nama" => "Bayu Puji",
		"npm" => "55325011", 
		"jurusan" => "Teknik Informatika", 
		"email" => "bayy@email.com",
		"gambar" => "bayu.jpg"
	],
	[
		"nama" => "Muqsi Bagas",
		"npm" => "55325234", 
		"jurusan" => "Teknik Informatika",
		"email" => "bagass@email.com",
		"gambar" => "bagas.jpg"
	],

];
?>
<!DOCTYPE html>
<head>
	<title>GET</title>
</head>
<body>
<h1>DAFTAR MAHASISWA</h1>
<ul>
<?php foreach($mahasiswa as $mhs): ?>
	<li>
		<a href="latihan7-2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>
	
</body>
</html>