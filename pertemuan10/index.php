<?php 
	require "functions.php";
	$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HALAMAN ADMIN</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0"> 
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Universitas</th>	
		</tr>
		<?php $i = 1; ?>
		<?php foreach($mahasiswa as $row) : ?>
			<tr>
				<td style="text-align: center;"><?php echo $i; ?></td>
				<td>
					<a href="">Hapus</a> | 
					<a href="">Ubah</a>
				</td>
				<td><?= $row["nim"] ?></td>
				<td><?= $row["nama"]  ?></td>
				<td><?= $row["email"] ?></td>
				<td><?= $row["jurusan"] ?></td>
				<td><?= $row["universitas"] ?></td>
			</tr>
		<?php endforeach; ?>
		<?php $i++; ?>
	</table>
</body>
</html>