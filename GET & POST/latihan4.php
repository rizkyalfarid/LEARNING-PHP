<?php 
  if(!isset($_POST['nama'])) {
    header("Location: latihan3.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LATIHAN 4 PHP</title>
</head>
<body>
  
  <h1>Selamat Datang <?php echo $_POST["nama"] ?></h1>
  <a href="latihan3.php">kembali ke halaman awal</a>
</body>
</html>