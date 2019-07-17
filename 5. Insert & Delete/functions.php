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
	$nama = $data["nama"];
	$npm = $data["npm"];
	$email = $data["email"];
	$jurusan = $data["jurusan"];
	$gambar = $data["gambar"];

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

?>