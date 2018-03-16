<?php
    if(isset($_POST['enviar'])){
        $username = $_POST['username'];
        $email    = $_POST['password'];
        $password = $_POST['email'];
    

        $conn = mysqli_connect('localhost', 'root', '142184Biel', 'desafio');

        if(!$conn){
            die("Deu ruim.. " . mysqli_error());
        }

        $query = "INSERT INTO user(username, email, password)VALUES('$username', '$email', '$password')";

        //função de execusão
        $result =  mysqli_query($conn, $query);

        if(!$result){
            die('Vishh!! Deu ruimm.');
        } else {
            echo "<script>alert('Dados cadastrados com sucesso!')</script>";
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
    <div class="jumbotron">
        <div class="row ">
            <div class="col-md-4">
                <form action="desafio8.php" method="post">
                    <div class="form-group">
                        <label for="username">Usuário:</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
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