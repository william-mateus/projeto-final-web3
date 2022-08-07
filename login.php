<?php

include_once('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email'] == 0 )){
        echo"coloque seu email";
    }
    else if (strlen($_POST['senha'] ==0 )){
        echo"coloque sua senha";
    }
    else{

        $sql_code = "SELECT * FROM cadastro where email = '$email' end senha = '$senha'";

        $sql_query = $mysqli->query($sql_code) or die("fala no codigo".$mysqli->error);
    }

        $quantidade = $sql_query->num_rows;

    if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){

            session_start();
        }

        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];

        header("location:index.html");

        echo"deu certo";

    }
    else{
        echo"Falha ao logar";
    }
  
};
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Low Prices</title>
        <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/login_registro.css">
    </head>
    <body>
        <img src="assets/low_price.png" alt="logo Low Price" class="logo">

        <nav id="toobar">
            <div style="margin-left: auto;">
                <a href="registro.html"><button type="button" id="cadastrar" class="button-toobar" >Cadastrar-se</button></a>
            </div>
        </nav>

        <form onsubmit="" method="post">
            <h1>Entrar</h1>
            <input type="text" placeholder="Nome" id="nome" class="input">
            <input type="password" placeholder="Senha" id="senha" class="input">
            <button type="submit" class="entrar">entrar</button>

        </form>
    </body>
</html>