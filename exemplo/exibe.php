<?php
    include 'conecta.php';

    $sql = "SELECT * FROM cadastro";

    $resultado_consulta = mysqli_quary($Conexao,$sql);

    var_dump($resultado_consulta);

    if(mysqli_num_rows($resultado_consulta)>0){
        echo "Resultados para exibir";

        while ($inha = mysqli_fectch_assoc($resultado_consulta)) {
            echo "id ".$linha["id"]. "<br>";
        };


    }
    else{
        echo "Não tenho dados para exibir";
    }

?>