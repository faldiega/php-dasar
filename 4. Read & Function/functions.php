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

?>