<?php
  if(isset($_POST['enviar'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    

  $conn = mysqli_connect("localhost", "root", "142184Biel", "loginapp");

  if(!$conn){
    die('Não deu certo a conexão ' . mysqli_error());
  }

  $query = "INSERT INTO cadastro(username, password) VALUES ('$username', '$password')";

  // Função que executa um comando SQL / executa uma query
  $result = mysqli_query($conn, $query);

  // validalção
  if(!$result){
    die("Não deu certo a INCLUSÃO: ");
  } else {
    echo "<script>alert('Dados cadastrados com sucesso!');</script>";
  }

}
 ?>
