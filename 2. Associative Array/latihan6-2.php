<?php 
/*$mahasiswa = [
	["Naufaldi Egaputra", "55415011", "Teknik Informatika", "ega@email.com"],
	["Bayu Puji", "55325011", "Teknik Informatika", "bayy@email.com"],
	["Bagas", "55325234", "Teknik Informatika", "bagss@email.com"]
];*/

// Array Associative
// definisinya sama seperti array numberik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach($mahasiswa as $mhs): ?>
	<ul>
		<li>
			<img src="img/<?= $mhs["gambar"]; ?>" alt="">
		</li>
		<li>Nama : <?= $mhs["nama"]; ?></li>
		<li>NPM : <?= $mhs["npm"]; ?></li>
		<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		<li>Email : <?= $mhs["email"]; ?></li>		
	</ul>
	<?php endforeach; ?>
</body>
</html>