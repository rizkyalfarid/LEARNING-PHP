<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BELAJAR PHP DASAR</title>
</head>
<body>
	<h1> <?php echo Salam('Rizky Al Farid', 'Pagi'); ?></h1>
</body>
</html>

<?php 
	function Salam($nama, $waktu) {
		return "Selamat $waktu, $nama";
	}
?>