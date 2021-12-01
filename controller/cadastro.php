<?php
    $dados = $_REQUEST;

    $nome = isset($dados["nome"]) ? $dados["nome"] : "Caroline";

    $Sobrenome = isset($dados["Sobrenome"]) ? $dados["Sobrenome"] : "Tremarin Araldi";

    $dataNasc = isset($dados["dataNasc"]) ? $dados["dataNasc"] : "0001-01-01";

    $email = isset($dados["email"]) ? $dados["email"] : "tremarincaroline8@gmail.com";

    $endereco = isset($dados["endereco"]) ? $dados["endereco"] : "Rua Candido Costa";

    $cidade = isset($dados["cidade"]) ? $dados["cidade"] : "Bento Gonçalves";

    $estado = isset($dados["estado"]) ? $dados["estado"] : "RS";

    $nomedousuario = isset($dados["nomedousuario"]) ? $dados["nomedousuario"] : "caroline.araldi";

    $profissao = isset($dados["profissao"]) ? $dados["profissao"] : "TI";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script type= "text/javascript" src="./js/calculadora.js"  ></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>
<body>
    <p> <?php echo $nome;  ?> </p>
    <p> <?php echo $Sobrenome;  ?> </p>
    <p> <?php echo $dataNasc;  ?> </p>
    <p> <?php echo $email;  ?> </p>
    <p> <?php echo $endereco;  ?> </p>
    <p> <?php echo $cidade;  ?> </p>
    <p> <?php echo $estado;  ?> </p>
    <p> <?php echo $nomedousuario;  ?> </p>
    <p> <?php echo $profissao;  ?> </p>
</body>
</html>

