<?php
    
        if(isset($_GET['calcularMedia'])){
        
            $nome       = $_GET['nome'];
            $disciplina = $_GET['disciplina'];
            $nac        = $_GET['nac'];
            $ps         = $_GET['ps'];
            $am         = $_GET['am'];

            
         $media = ($nac * 0.2) + ($ps * 0.5) + ($am * 0.3);
        }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"/>
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"><h1>Desafio 10</h1></div>
        </div>
        <div class="row">
           <div class="col-sm-6">
           <form action="desafio10.php">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" placeholder="Digite seu nome"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome">Disciplina</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="disciplina" placeholder="Digite a disciplina"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome">NAC</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nac" placeholder="Digite a nota da NAC"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome">PS</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="ps" placeholder="Digite a nota da PS"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome">AM</label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="am" placeholder="Digite a nota do AM"/>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-outline-primary btn-block" type="submit" name="calcularMedia" value="CALCULAR MÉDIA"/>
                </div>
                <?php
                   
                    
                    if(isset($media)){
                        echo "<div class='alert alert-success' role='alert'>" . $nome. ", sua média é:". $media ." em ". $disciplina . "</div>";   
                    }
                ?>    
            </form>
           </div>
        </div>
    </div>
</body>
</html>