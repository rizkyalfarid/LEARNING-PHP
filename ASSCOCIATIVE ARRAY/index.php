<?php

$mahasiswa = [
  [
    "nama" => "Rizky Al Farid Hafizh",
    "kampus" => "Universitas Komputer Indonesia",
    "nim" => 10123028,
  ],
  [
    "nama" => "Savitri Indriyanti",
    "kampus" => "Universitas Indonesia",
    "nim" => 10123029,
  ],
  [
    "nama" => "Nayu Putri Ashaddy",
    "kampus" => "Institut Teknologi Harapan Bangsa",
    "nim" => 10123030,
  ]
];

foreach ($mahasiswa as $m) {
  echo "Nama: " . $m["nama"] . "<br>";
  echo "Kampus: " . $m["kampus"] . "<br>";
  echo "NIM: " . $m["nim"] . "<br>";
  echo "<br>";
}
?>
