<?php  
	require "functions.php";
	if(isset($_POST['submit'])) {

		if ( tambah($_POST) > 0) {
			echo "<script>
					alert('Data Berhasil di tambahkan')
					document.location.href = index.php;
				  </script>";
		} else {
			echo "Data Gagal Di Tambahkan";
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
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nim">NIM: </label>
				<input type="text" id="nim" name="nim">
			</li>
			<li>
				<label for="nama">Nama: </label>
				<input type="text" id="nama" name="nama">
			</li>
			<li>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan:</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="universitas">Universitas:</label>
				<input type="file" name="universitas" id="universitas">
			</li>	
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>
</body>
</html>