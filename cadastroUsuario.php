<?php
    include "banco.php";

    $usuario = $_POST['user'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirm_Senha = $_POST['confirm_Senha'];

    if($senha != $confirm_Senha){
       echo "Senhas não conferem";
    } elseif(strlen($senha) <= 5){
        echo "Senha precisa ser maior que 5";
    } else{
        mysqli_query($link, "INSERT INTO usuario(senha, usuario, email) values ('$senha', '$usuario','$email')");
        header('location: login.php');
    }

?>


