<?php
    include "db.php";

    function mostraDados(){
        global $conn;
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function atualizaTabela(){
        global $conn;
        if(isset($_POST['update'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
         $id       = $_POST['id'];
         
         $query = "UPDATE user SET ";
         $query .= "username = '$username', ";
         $query .= "password = '$password' ";
         $query .= "WHERE id = $id ";
         
         $result = mysqli_query($conn, $query);
         
         if(!$result){
             die('Falha na atualização');
         } else {
             echo "<script>alert('Dados atualizados com sucesso!');</script>";
         }
        }
    }
        
    function deletaUsuario(){
        global $conn;
        if(isset($_POST['delete'])){
            $id = $_POST['id'];

             $query = "DELETE FROM user WHERE id = $id";
             $result = mysqli_query($conn, $query);

             if(!$result){
                 die('Falha ao excluir');
             } else {
                 echo "<script>alert('Dados excluidos com sucesso!');</script>";
             }

        }
    }

    function insereUsuario(){
        global $conn;
        if(isset($_POST['enviar'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $query = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
        
            // Função que executa um comando SQL / executa uma query
            $result = mysqli_query($conn, $query);
        
            // validalção
            if(!$result){
            die("Não deu certo a INCLUSÃO: ". mysqli_error());
            } else {
            echo "<script>alert('Dados cadastrados com sucesso!');</script>";
            }
        
        }
    }

    function lerTabela(){
        global $conn;
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
                print_r($row);
            echo "</pre>";
        }
    }
    
?>
