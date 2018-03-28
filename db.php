<?php
  $conn = mysqli_connect("localhost", "root", "fiap", "loginapp");
  if(!$conn){
    die('Não deu certo a conexão ' . mysqli_error());
  } 

?>