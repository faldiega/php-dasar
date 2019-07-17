<?php 
$conn = mysqli_connect("localhost", "root", "", "unpas-phpdasar");

function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = []; //sebagai wadah

	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row; //memindahkan data-data ke dalam wadah
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	// ambil data dari tiap elemen dalam form
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO mahasiswa VALUES ('','$nama','$npm','$email','$jurusan','$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
	return mysqli_affected_rows($conn);	
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE mahasiswa SET 
				nama = '$nama',
				npm = '$npm',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar' 
			WHERE id = $id
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa WHERE 
			  nama LIKE '%$keyword%' OR
			  npm LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%'
			";
	return query($query);
}

?>