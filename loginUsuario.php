<?php
    include "banco.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($link, "SELECT * FROM usuario WHERE email like '$email' AND senha like '$senha'");
    
    while($vetor = mysqli_fetch_array($sql)){
        $id = $vetor['usuario_ID'];
        $nome = $vetor['nome'];
        $email = $vetor['email'];
        $senha = $vetor['senha'];
        $funcao = $vetor['funcao'];

        echo "nome: $nome<br>";
        echo "email: $email<hr>";
    }

?>


