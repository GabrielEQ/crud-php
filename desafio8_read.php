<?php
    $conn = mysqli_connect('localhost', 'root', '142184Biel', 'desafio8');

    if(!$conn){
        die("Deu ruim.. " . mysqli_error());
    }

    $query = "SELECT * FROM user";
    $result =  mysqli_query($conn, $query);

    if($result){
        die('Vishh!! Deu ruimm.');
    } else {
        echo "Dados cadastrados com sucesso!";
    }

?>
