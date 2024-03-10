<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'kost_riversaide');
  
  if(isset($_POST["submit"])) {
    $noKamar = $_POST['No_Kamar'];
    $namaPemilik = $_POST['Pemilik_Kamar'];
    $nomorTelepon = $_POST['No_Telepon'];
    $hargaKamar =  $_POST['Harga'];
    $kelasKamar = $_POST['Kelas_Kamar'];

    $query = "INSERT INTO data_kamar (No_Kamar, Pemilik_Kamar, No_Telepon, Harga, Kelas_Kamar) VALUES ('$noKamar', '$namaPemilik', '$nomorTelepon', $hargaKamar, '$kelasKamar')";

    global $conn;
    if(mysqli_query($conn, $query)) {
      echo "Data berhasil di tambahkan ";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Kamar Kost</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 8px;
    }

    input, select {
      padding: 8px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
    }

    /* Tombol Kembali */
    button[type="button"] {
      background-color: #95a5a6;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Tambah Data Kamar Kost</h2>
    <form id="formTambahData" action="" method="post">
      <label for="noKamar">No Kamar:</label>
      <input type="text" id="noKamar" name="No_Kamar" required placeholder="Nomor Kamar">

      <label for="namaPemilik">Nama Pemilik:</label>
      <input type="text" id="namaPemilik" name="Pemilik_Kamar" placeholder="Nama Pemilik" required>

      <label for="nomorTelepon">Nomor Telepon:</label>
      <input type="tel" id="nomorTelepon" name="No_Telepon" required placeholder="Nomor Telepon">

      <label for="hargaKamar">Harga Kamar:</label>
      <input type="number" id="Harga"required placeholder="Harga Kamar" name="Harga">

      <label for="kelasKamar">Kelas Kamar:</label>
      <select id="kelasKamar" name="Kelas_Kamar" required>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
      </select>

      <button type="submit" name="submit">Tambah Data</button>
      <button type="button" onclick="goToHomePage()">Kembali</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
