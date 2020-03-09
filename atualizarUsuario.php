<?php
    include "banco.php";

    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($link, "UPDATE FROM usuario SET email = '$email', nome= '$nome', senha = '$senha', usuario = ''$usuario 
                        WHERE usuario = '$usuario' and email = '$email'");
?>


