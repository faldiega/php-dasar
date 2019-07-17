<?php 
// Pengulangan pada array
// for atau foreach
$angka = [3,2,15,20,11,77,89,12,23];
$numbers = [3,5,2,12,54,12,32];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 2 Pengulangan Array</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {clear: both;}
	</style>
</head>
<body>

<?php for($i=0; $i<count($angka); $i++) { ?>
	<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($numbers as $number) : ?>
	<div class="kotak"><?= $number; ?></div>
<?php endforeach; ?>
</body>
</html>