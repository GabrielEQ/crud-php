<?php
  $conn = mysqli_connect("localhost", "USERNAME", "PASSWORD", "DBNAME");
  if(!$conn){
    die('Não deu certo a conexão ' . mysqli_error());
  } 

?>
