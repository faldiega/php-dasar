<?php 
// Array 1 Dimensi
//$mahasiswa = ["Naufaldi Egaputra", "55415011", "Teknik Informatika", "ega@email.com"];

// Array Multi Dimensi
$mahasiswa = [
	["Naufaldi Egaputra", "55415011", "Teknik Informatika", "ega@email.com"],
	["Bayu Puji", "55325011", "Teknik Informatika", "bayy@email.com"],
	["Bagas", "55325234", "Teknik Informatika", "bagss@email.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<!-- Array 1 Dimensi -->
	<ul>
		<?php //foreach($mahasiswa as $mhs) : ?>
			<li><?php //echo $mhs; ?></li>
		<?php //endforeach; ?>
		<br>
	</ul>

	<!-- Array Multi Dimensi -->
	<?php foreach($mahasiswa as $mhs): ?>
	<ul>
		<li>Nama : <?= $mhs[0]; ?></li>
		<li>NPM : <?= $mhs[1]; ?></li>
		<li>Jurusan : <?= $mhs[2]; ?></li>
		<li>Email : <?= $mhs[3]; ?></li>
		
	</ul>
	<?php endforeach; ?>
</body>
</html>