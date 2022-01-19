<?php

$servidor = "localhost";
$porta = "3306";
$nomedobanco = "info_curso";
$usuario = "root";
$senha = "qwe123";

$conexao = null;

function conectar(){

    $conexao = new \mysqli($servidor, "root", "qwe123", $nomeBanco, $porta);

    if ($conexao->connect_error) {
        die('Não foi possível conectar: ' . $conexao->connect_error);
    }
    echo 'Conexão bem sucedida <br>';
}

function desConectar(){
    echo 'Desconectou';
    mysql_close($conexao);
    
}

conectar();
desConectar();
