<?php include "db.php";
      include "functions.php";
      insereUsuario();
?>
<?php include "header.php"; ?>
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
            <?php include "buttons.php"; ?>
        </div>
    </div>
<?php include "footer.php"; ?>