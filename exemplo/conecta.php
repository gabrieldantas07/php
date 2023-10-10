<?php
    //echo "<h1> Hello, World! </h1>";
    //echo "aprendendo php <br>";
    //echo "com o professor Anderson";

    //echo "<br>";

    //$Nome = "Gabriel";
    //$Idade = 17;

    //echo "Seu nome é: $Nome";
    //echo "<br>";
    //echo 'Seu nome é: $Nome';
    //echo "<br>";
    //echo 'Sua idade é: '.$Idade;

    // Dados para conexão com o DB MySQL

    $Servidor = "localhost";
    $Usuario = "root";
    $Senha = "";
    $Banco = "escola";

    // Criando um objeto de conexão
    $Conexao = new mysqli($Servidor,$Usuario,$Senha,$Banco);

    // Checar se conseguiu conectar
    if($Conexao->connect_error){
        die("Conexão Falhou: " .$Conexao->connect_error);
    }
    else{
        echo "Conectado com sucesso";
    };
?>
