<?php

include_once("conexao.php");

$nome = $_POST['nome'];

$email = $_POST['email'];

$senha = $_POST['senha'];


$sql = "INSERT INTO cadastro (nome,email,senha) values ('$nome','$email','$senha')";

    if(mysqli_query($conexao,$sql)){
        header("location:login.php");
    }

    else{
        echo"nao cadastrado".mysqli_connect_errno($conexao);
    }

mysqli_close($conexao);

?>