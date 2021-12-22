<?php

class CadastroController {

    public function dadosCliente(){
        $dados = [
            "nome" => "Zé",
            "sobrenome" => "do Caminhão",
            "dataNascimento" => "01/01/1950",
            "email" => "zecaminhao@infoserv.com",
            "endereco" => "rua pernambuco",
            "cidade" => "Bento Goncalves",
            "estado" => "RS",
            "nomeUsuario" => "joao123",
            "profissao" => "Desenvolvedor",
        ];

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dados);
        exit();
    }
}

$objCadastroController = new CadastroController();
$objCadastroController->dadosCliente();