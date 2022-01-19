<?php

$servidor = "localhost";
$porta = "3306";
$nomedobanco = "info_curso";
$usuario = "root";
$senha = "qwe123";

$conexao = null;

function conectar(){

    $conexao = new \mysqli($servidor, $usuario, $senha, $nomedobanco, $porta);

    if ($conexao->connect_error) {
        die('Não foi possível conectar: ' . $conexao->connect_error);
    }
    echo 'Conexão bem sucedida';
}

function desConectar(){
    sleep(5);
    mysql_close($conexao);
    echo 'deconectou';
}

conectar();
desConectar();
