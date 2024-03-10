<?php 
  $connection = mysqli_connect('localhost', 'root', '', 'kost_riversaide');
  
  $data = $_GET["data"];
  
  mysqli_query($connection, "DELETE FROM data_kamar WHERE No_Kamar = '$data' ");
  
  header('Location: index.php');
?>