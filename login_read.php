<?php 
    $conn = mysqli_connect('localhost', 'root', 'fiap', 'loginapp');
    if(!$conn){
        die('Deu ruim!');
    }

    $query = "SELECT * FROM user";
    $result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    </head>

    <body>
      <div class="container">
        <div class="col-sm-6">
         <?php 
            while($row = mysqli_fetch_assoc($result)){ 
                print_r($row);
            }
        ?>
        

        </div>
      </div>
    </body>
</html>
