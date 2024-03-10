<?php 

  $students = [
    [
      "nama" => "Rizky Al Farid Hafizh",
      "nim" => 10123028,
      "prodi" => "Teknik Informatika"
    ],
    [
      "nama" => "Nayu Putri Ashaddy",
      "nim" => 10123002,
      "prodi" => "Kesenian"
    ],
    [
      "nama" => "Savitri Indriyanti",
      "nim" => 10123005,
      "prodi" => "Sastra Korea"
    ],
  ]
?>

<html>
<head>
    <title>BELAJAR PHP DASAR</title>
</head>
<body>
  <h1>DAFTAR MAHASISWA</h1>
  <ul>
    <?php foreach($students as $student) : ?>
      <li>
        <a href="latihan.php?nama=<?php echo $student["nama"]?>&nim=<?php echo $student['nim']?>&prodi=<?php echo $student["prodi"]?>&">
          <?php echo $student["nama"] ?>
      </a>
      </li>
      <br>
    <?php endforeach;  ?>
  </ul>

</body>
</html>