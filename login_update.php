<?php include "db.php";
      include "functions.php";

     atualizaTabela();
    
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

     <div class="mx-auto" style="width: 400px;">
      <div class="jumbotron">
          <form action="login_update.php" method="post">
        <div class="form-group">
          <label for="username">Usuário:</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Senha:</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <select name="id"> 
                <?php 
                    mostraDados();
                ?>
             </select>
        </div>
        <div class="form-group">
            <input type="submit" name="update" value="atualizar" class="btn btn-primary"/>
        </div>
         
      </form>
      </div>
    </div>
  </body>
</html>


