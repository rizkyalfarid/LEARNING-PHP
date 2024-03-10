<?php  
	require "functions.php";

	//ambil data id;
	$id = $_GET["id"];
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

	if(isset($_POST['submit'])) {
		if ( ubah($_POST, $id) > 0) {
			echo "<script>
					alert('Data Berhasil di Ubah')
					document.location.href = index.php;
				  </script>";
		} else {
			echo "Data Gagal Di Ubah!";
		}
		
	}	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HALAMAN TAMBAH DATA</title>
</head>
<body>
	<h1>Edit Data Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nim">NIM: </label>
				<input type="text" id="nim" name="nim" value="<?= $mhs['nim'] ?>">
			</li>
			<li>
				<label for="nama">Nama: </label>
				<input type="text" id="nama" name="nama" value="<?= $mhs['nama'] ?>">
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" value="<?= $mhs['email'] ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan:</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>">
			</li>
			<li>
				<label for="universitas">Universitas:</label>
				<input type="file" name="universitas" id="universitas" value="<?= $mhs['universitas'] ?>">
			</li>	
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>
</body>
</html>