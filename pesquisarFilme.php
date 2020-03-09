<?php
    include "banco.php";

    $filme = $_POST['dados'];
    $data_lancamento = $_POST['dados'];

    $sql = mysqli_query($link, "SELECT * FROM episodios WHERE titulo like '$filme' OR data_lancamento like '$data_lancamento'");


        /* Loop para selecionar todos os filmes gravados */
        while($vetor = mysqli_fetch_array($sql)){
            $id = $vetor['episodio_ID'];
            $titulo = $vetor['titulo'];
            $data_lancamento = $vetor['data_lancamento'];
            $equipe = $vetor['equipe'];

            echo "título: $titulo<br>";
            echo "Data de lançamento: $data_lancamento<hr>";
        }
    


?>


