<?php

require_once('conexao.php');
$email=$_POST['email'];
$senha=$_POST['senha'];


$login=mysqli_query($conexao,"SELECT * FROM cadastro where email ='$email' AND senha ='$senha' ");

if(mysqli_num_rows($login)!=0 ){

    header("location:index.html");
}
else{

    echo"deu ruim";
};
?>