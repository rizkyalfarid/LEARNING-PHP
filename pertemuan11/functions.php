<?php 
//koneksi ke database 
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;	
	}
	return $rows;
}

function tambah($data) {
	$nim = htmlspecialchars($data['nim']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);

	global $conn;

	//upload gambar 

	$gambar = upload();
	if(!$gambar) {
		return false;
	}

	$query = "INSERT INTO mahasiswa VALUES
			('', '$nim', '$nama', '$email', '$jurusan', '$universitas')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload () {
	$namaFile = $_FILES['universitas']['name'];
	$ukuranFile = $_FILES['universitas']['size'];
	$error = $_FILES['universitas']['error'];
	$tmpName = $_FILES['universitas']['tmp_name'];

	if($error === 4) {
		echo "<script>
				alert('Pilih Gambar Terlebih dahulu!')
			 </script>";

		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namafile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Yang anda upload bukanlah gambar!');
			 </script>";
		return false;	
	}


	if($ukuranFile > 1000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			 </script>";
		return false;
	}
}

function hapus ($data) {
	global $conn;
	$query = "DELETE FROM mahasiswa WHERE id = $data";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data, $id) {
	$nim = htmlspecialchars($data['nim']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$universitas = htmlspecialchars($data['universitas']);

	global $conn;


	$query = "UPDATE mahasiswa SET 
			  nim = '$nim',
			  nama = '$nama',
			  email = '$email',
			  jurusan = '$jurusan',
			  universitas = '$universitas' 
			  WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari ($keyword) {
	$query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%'
			 OR nim LIKE '%$keyword%' 
			 OR email LIKE '%$keyword%' 
			 OR jurusan LIKE '%$keyword%'
			 OR universitas LIKE '$keyword'";
	return query($query);
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($data['password']);
	$password2 = mysqli_real_escape_string($data['password2']);

	if($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai');
			  </script>";
		return false;
	}
}

?>