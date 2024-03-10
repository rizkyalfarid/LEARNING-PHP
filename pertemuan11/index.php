<?php 
	require "functions.php";
	$mahasiswa = query("SELECT * FROM mahasiswa ");

	if(isset($_POST['cari'])) {
		$mahasiswa = cari($_POST['keyword']);
	}
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
	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>

	<br>
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
					<a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin Ingin di hapus ?')">Hapus</a> | 
					<a href="ubah.php?id=<?= $row['id'] ?>">Ubah</a>
				</td>
				<td><?= $row["nim"] ?></td>
				<td><?= $row["nama"]  ?></td>
				<td><?= $row["email"] ?></td>
				<td><?= $row["jurusan"] ?></td>
				<td><?= $row["universitas"] ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>