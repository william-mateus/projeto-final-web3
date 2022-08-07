<?php
   $servidor = "localhost";
   $email = "root";
   $senha = "";
   $banco = "cadastro";


   $conexao= mysqli_connect($servidor,$email,$senha,$banco);

    if(!$conexao){
        die("Houve um erro".mysqli_connect_errno());
    };

  
  ?>
  