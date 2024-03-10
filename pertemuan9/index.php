<?php 
  require "function.php";
  $data_pemilik = query("SELECT * FROM data_kamar")

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEBSITE KAMAR KOST RIVERSAIDE</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #3498db;
    }

    a {
      display: inline-block;
      margin: 10px 0;
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #3498db;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    td a {
      color: #3498db;
      text-decoration: none;
      margin-right: 10px;
    }

    td a:hover {
      text-decoration: underline;
    }

    td a {
      color: #e74c3c;
    }

    td a:hover {
      color: #c0392b;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Daftar Kamar Kost RIVERSAIDE</h1>
    
    <a href="tambahdata.php">Tambah Data Kamar</a>
    <br>
    
    <table border=1 cellpadding=12 cellspacing=0>
      <tr>
        <th>No Kamar</th>
        <th>Aksi</th>
        <th>Nama Pemilik</th>
        <th>Nomor Telepon</th>
        <th>Kelas Kamar</th>
        <th>Harga Kamar</th>
      </tr>
      <?php foreach($data_pemilik as $data) :?>
      <tr>
          <td><?php echo $data["No_Kamar"] ?></td>
          <td>
            <a href="ubah.php?id=<?php echo $data["No_Kamar"]?>">Ubah</a> 
            <a href="hapus.php?data=<?php echo $data["No_Kamar"]?>" onclick="return confirm('Yakin Ingin di hapus ?')">Hapus</a>
          </td>
          <td><?php echo $data["Pemilik_Kamar"] ?></td>
          <td><?php echo $data["No_Telepon"] ?></td>
          <td style="text-align:center;"><?php echo $data["Kelas_Kamar"] ?></td>
          <td><?php echo $data["Harga"] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>  
</body>
</html>