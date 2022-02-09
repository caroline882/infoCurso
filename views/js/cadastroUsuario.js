$( document ).ready(function() {
    listarUsuario();


    var urlBackEnd = "http://localhost:3000/views/cadastroUsuario.php";

    $(".btn-editar").on("click", function() {
        var id = $(this).val();
        $(".modal").modal('show');
    });

    function buscarUsuario(id) {

        $.get(urlBackEnd).done(function(responseJSON) {
                console.log(responseJSON);

                $.each(responseJSON, function(idx, cliente) {
                    if(id == cliente.id) {
                        $("#id").val(cliente.id);
                        $("#nome").val(cliente.nome);
                        $("#Sobrenome").val(cliente.sobrenome);
                        $("#dataNasc").val(cliente.dataNascimento);
                        $("#email").val(cliente.email);
                        $("#endereco").val(cliente.endereco);
                        $("#cidade").val(cliente.cidade);
                        $("#estado").val(cliente.estado);
                        $("#nomedousuario").val(cliente.nomeUsuario);
                        $("#profissao").val(cliente.profissao);
                    }

                });
            })
            .fail(function() {
                alert( "error" );
            })
            .always(function() {
                // alert( "finished" );
            });

    }

    function limparDados (){
        $("#id").val("");
        $("#nome").val("");
        $("#Sobrenome").val("");
        $("#dataNasc").val("");
        $("#email").val("");
        $("#endereco").val("");
        $("#cidade").val("");
        $("#estado").val("");
        $("#nomedousuario").val("");
        $("#profissao").val("");
    }
        function montarTabela(listadeUsusarios){
            var tabelaHtml = montarCabecalho();
            tabelaHtml += montarCorpoTabela (listadeUsuarios);

            $("#idTabelaUsuarios").html(tabelaHtml);
        }
    
    function montarCabecalho(){
          var cabecalho = (
              
            "<thead>"+
              "<tr>" +
                "<th>" +
                  "Nome" +
                "</th>" +
                "<th>" +
                  "Sobrenome" +
                "</th>" +
                "<th>" +
                  "Data de Nascimento" +
                "</th>" +
                "<th>" +
                  "E-mail" +
                "</th>" +
                "<th>" +
                  "Endereço" +
                "</th>" +
                "<th>" +
                  "Cidade" +
                "</th>" +
                "<th>" +
                  "Estado" +
                "</th>" +
                "<th>" +
                  "Nome do Usuário" +
                "</th>" +
                "<th>" +
                  "Profissão" +
                "</th>" +
                "<th>" +
                  "Ações" +
                "</th>" +
              "</tr>" +
            "</thead>"
         );

         return cabecalho;
    }


    function montarCorpoTabela(dadosTabela) {
        var body = "<body>"

        $.each(dadosTabela, function( indice, usuario){

            var statusDesc = usuario.status == 1 ? "Ativo" : "Inativo";

             var tr = "<tr>";
             var td = "<td>" + usuario.id +"</td>";
             td += "<td>" + usuario.nome +"</td>";
             td += "<td>" + usuario.email +"</td>";
             td += "<td>" + usuario.usuario +"</td>";
             td += "<td>" + usuario.status +"</td>";
             td += "<td>" + usuario.email_recuperacao +"</td>";

             var btnEditar = "<button type='button' value=" + valor.id + "class='btn btn-warning btnEditar'>Editar <i class='far fa-edit'></i<>/button>";
             var btnExcluir = "<button type='button' value=" + valor.id + "class='btn btn-danger btnExcluir'>Excluir <i class='far fa-trash-alt'></i<>/button>";

             td += "<td>" + btnEditar + btnExcluir + "</td>";

             tr = td + "</tr>";
             body += tr;
        
        });    
        
        
         body += "</body>";
         return body;
    }
});
