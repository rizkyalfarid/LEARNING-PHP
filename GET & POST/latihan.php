<?php 

  if( !isset($_GET["nama"]) || isset($_GET["nim"]) || isset($_GET["prodi"])) {
    header("Location: index.php");
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DETAIL MAHASISWA</title>
</head>
<body>
  <h1>DETAIL MAHASISWA</h1>
  <ul>
    <li><?php echo $_GET["nama"];?></li>
    <li><?php echo $_GET["nim"];?></li>
    <li><?php echo $_GET["prodi"];?></li>
  </ul>

  <a href="index.php">Kembali ke awal</a>
</body>
</html>