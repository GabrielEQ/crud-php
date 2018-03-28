<<<<<<< HEAD
<?php include "db.php";
      include "functions.php";

     deletaUsuario();
    
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
      <form action="login_delete.php" method="post">
        <div class="form-group">
             <h2>Qual usuário você deseja deletar?</h2>
            <select name="id"> 
                <?php 
                    mostraDados();
                ?>
             </select>
        </div>
        <div class="form-group">
            <input type="submit" name="delete" value="Excluir" class="btn btn-primary"/>
        </div>
         
      </form>
      </div>
    </div>
  </body>
</html>


=======
<?php include "db.php";
      include "functions.php";
     deletaUsuario();
?>
<?php include "header.php"; ?>
  <div class="mx-auto" style="width: 400px;">
    <div class="jumbotron">
    <form action="login_delete.php" method="post">
      <div class="form-group">
            <h2>Qual usuário você deseja deletar?</h2>
          <select name="id"> 
              <?php 
                  mostraDados();
              ?>
              <?php include "buttons.php"; ?>
            </select>
      </div>
      <div class="form-group">
          <input type="submit" name="delete" value="Excluir" class="btn btn-primary"/>
      </div>
      <?php include "buttons.php"; ?>
    </form>
  </div>
<?php include "footer.php"; ?>


>>>>>>> 440bd65b403b88738c487582777013abe3ee1669
