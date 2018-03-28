<?php
  if(isset($_POST['enviar'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    

  $conn = mysqli_connect("localhost", "root", "fiap", "loginapp");

  if(!$conn){
    die('Não deu certo a conexão ' . mysqli_error());
  }

  $query = "INSERT INTO user(username, password) VALUES ('$username', '$password')";

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

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="utf-8"/>
      <title>PHP</title>
      <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"/>
  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="jumbotron">
                  <form action="login_create.php" method="POST">
                    <div class="form-group">
                      <label for="username">Usuário:</label>
                      <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="username">Senha:</label>
                      <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary btn-block"/>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
