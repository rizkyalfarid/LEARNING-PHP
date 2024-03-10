<?php 
  $data_students = [
    ['Rizky Al Farid', '10123028', 'rizky.10123028@mahasiswa.unikom.ac.id'],
    ['Savitri Indriyanti', '10123002', 'savitri.10123002@mahasiswa.unikom.ad.id'],
    ['Nayu Putri Ashaddy', '10123000', 'nayu.10123002@mahasiswa.unikom.ad.id'],
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LATIHAN PHP DASAR</title>
</head>
<body>
  <h1>DAFTAR MAHASISWA</h1>
  
  <?php foreach($data_students as $students) : ?>
    <ul>
      <?php foreach($students as $stundent) : ?>
        <li><?php echo $stundent ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
</body>
</html>