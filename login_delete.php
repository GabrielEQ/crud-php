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


