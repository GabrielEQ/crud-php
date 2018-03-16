<?php
  $conn = mysqli_connect("localhost", "root", "PASSWORD", "loginapp");
  if(!$conn){
    die('Não deu certo a conexão ' . mysqli_error());
  } 

?>
