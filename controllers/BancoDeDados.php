<?php

$servidor = "localhost";
$porta = "3306";
$nomedobanco = "info_curso";
$usuario = "aluno1";
$senha = "qwe123";

if ($conexao) {
    desConectar();
    $conexao = null;
}

function conectar() {
    global $conexao;

    $conexao = mysqli_connect("localhost", "aluno1", "qwe123", "info_curso");
    // $conexao = mysqli_connect("localhost", "aluno", "qwe123", "info_curso");

    if (!$conexao) {
        die('Não foi possível conectar: ' . mysqli_connect_error());
    }
}

function desConectar() {
    echo 'Desconectou';
    mysql_close($conexao);
    
}

if (!$conexao) {
    conectar();
}
