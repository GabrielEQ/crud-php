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
    <div class="jumbotron">
      <form action="conexao.php" method="POST">
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
  </body>
</html>
