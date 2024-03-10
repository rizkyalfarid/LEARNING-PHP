<?php
$connection = mysqli_connect('localhost', 'root', '', 'kost_riversaide');

if (isset($_POST["submit"])) {
    $noKamar = $_POST['No_Kamar'];
    $namaPemilik = $_POST['Pemilik_Kamar'];
    $nomorTelepon = $_POST['No_Telepon'];
    $hargaKamar = $_POST['Harga'];
    $kelasKamar = $_POST['Kelas_Kamar'];

    $query = "UPDATE data_kamar SET 
              Pemilik_Kamar = '$namaPemilik',
              No_Telepon = '$nomorTelepon',
              Harga = '$hargaKamar',
              Kelas_Kamar = '$kelasKamar'
              WHERE No_Kamar = '$noKamar'";

    if (mysqli_query($connection, $query)) {
        echo "Data berhasil diubah";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}

if (isset($_GET["No_Kamar"])) {
    $noKamar = $_GET["No_Kamar"];
    $result = mysqli_query($connection, "SELECT * FROM data_kamar WHERE No_Kamar = '$noKamar'");
    $dataKamar = mysqli_fetch_assoc($result);
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Kamar Kost</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Ubah Data Kamar Kost</h2>
    <form id="formUbahData" action="" method="post">
      <label for="noKamar">No Kamar:</label>
      <input type="text" id="noKamar" name="No_Kamar" required placeholder="Nomor Kamar" value="<?php echo $dataKamar['No_Kamar']; ?>" readonly>

      <label for="namaPemilik">Nama Pemilik:</label>
      <input type="text" id="namaPemilik" name="Pemilik_Kamar" placeholder="Nama Pemilik" required value="<?php echo $dataKamar['Pemilik_Kamar']; ?>">

      <label for="nomorTelepon">Nomor Telepon:</label>
      <input type="tel" id="nomorTelepon" name="No_Telepon" required placeholder="Nomor Telepon" value="<?php echo $dataKamar['No_Telepon']; ?>">

      <label for="hargaKamar">Harga Kamar:</label>
      <input type="number" id="Harga" required placeholder="Harga Kamar" name="Harga" value="<?php echo $dataKamar['Harga']; ?>">

      <label for="kelasKamar">Kelas Kamar:</label>
      <select id="kelasKamar" name="Kelas_Kamar" required>
        <option value="A" <?php echo ($dataKamar['Kelas_Kamar'] == 'A') ? 'selected' : ''; ?>>A</option>
        <option value="B" <?php echo ($dataKamar['Kelas_Kamar'] == 'B') ? 'selected' : ''; ?>>B</option>
        <option value="C" <?php echo ($dataKamar['Kelas_Kamar'] == 'C') ? 'selected' : ''; ?>>C</option>
      </select>

      <button type="submit" name="submit">Simpan Perubahan</button>
      <a href="index.php"><button type="button">Batal</button></a>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
