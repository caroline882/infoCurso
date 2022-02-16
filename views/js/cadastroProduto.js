$( document ).ready(function() {
    listarProduto();


    var urlBackEnd = "http://localhost:3000/views/cadastroProduto.php";

    $(".btn-editar").on("click", function() {
        var id = $(this).val();
        $(".modal").modal('show');
    });

    function buscarProduto(id) {

        $.get(urlBackEnd).done(function(responseJSON) {
                console.log(responseJSON);

                $.each(responseJSON, function(idx, produto) {
                    if(id == produto.id) {
                        $("#id").val(produto.id);
                        $("#nome").val(produto.nome);
                        $("#descricao").val(produto.descricao);
                        $("#codigo_sku").val(produto.codigo_sku);
                        $("#quantidade").val(produto.quantidade);
                        $("#peso").val(produto.peso);
                        $("#classificacao").val(produto.classificacao);
                        $("#status").val(produto.status);
                        $("#largura").val(produto.largura);
                        $("#altura").val(produto.altura);
                        $("#profundidade").val(produto.profundidade);
                        $("#preco").val(produto.preco);
                        $("#preco_promocional").val(produto.preco_promocional);
                        $("#gtin").val(produto.gtin);
                        $("#unidade_medida").val(produto.unidade_medida);
                        $("#condicao").val(produto.condicao);
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
        $("#descricao").val("");
        $("#codigo_sku").val("");
        $("#quantidade").val("");
        $("#peso").val("");
        $("#classificacao").val("");
        $("#status").val("");
        $("#largura").val("");
        $("#altura").val("");
        $("#profundidade").val("");
        $("#preco").val("");
        $("#preco_promocional").val("");
        $("#gtin").val("");
        $("#unidade_medida").val("");
        $("#condicao").val("");

    }
    
    function montarTabela(listadeProduto){
        var tabelaHtml = montarCabecalho();
        tabelaHtml += montarCorpoTabela (listadeProduto);

        $("#idTabelaUsuarios").html(tabelaHtml);
    }
    
    function montarCabecalho(){
          var cabecalho = (
              
            "<thead>"+
              "<tr>" +
                "<th>id</th>" +
                "<th>" +
                  "nome" +
                "</th>" +
                "<th>" +
                  "descricao" +
                "</th>" +
                "<th>" +
                  "codigo_sku" +
                "</th>" +
                "<th>" +
                  "quantidade" +
                "</th>" +
                "<th>" +
                  "peso" +
                "</th>" +
                "<th>" +
                  "classificacao" +
                "</th>" +
                "<th>" +
                  "status" +
                "</th>" +
                "<th>" +
                  "largura" +
                "</th>" +
                "<th>" +
                  "altura" +
                "</th>" +
                "<th>" +
                  "profundidade" +
                "</th>" +
                "<th>" +
                  "preco" +
                "</th>" +
                "<th>" +
                  "preco_promocional" +
                "</th>" +
                "<th>" +
                  "gtin" +
                "</th>" +
                "<th>" +
                  "unidade_medida" +
                "</th>" +
                "<th>" +
                  "condicao" +
                "</th>" +
              "</tr>" +
            "</thead>"
         );

         return cabecalho;
    }


    function montarCorpoTabela(dadosTabela) {
        var body = "<body>"

        $.each(dadosTabela, function( indice, produto){

            var statusDesc = produto.status == 1 ? "Ativo" : "Inativo";

             var tr = "<tr>";
             var td = "<td>" + produto.id +"</td>";
             td += "<td>" + produto.nome +"</td>";
             td += "<td>" + produto.descricao +"</td>";
             td += "<td>" + produto.codigo_sku +"</td>";
             td += "<td>" + produto.quantidade +"</td>";
             td += "<td>" + produto.peso +"</td>";
             td += "<td>" + produto.classificacao +"</td>";
             td += "<td>" + produto.status +"</td>";
             td += "<td>" + produto.largura +"</td>";
             td += "<td>" + produto.altura +"</td>";
             td += "<td>" + produto.profundidade +"</td>";
             td += "<td>" + produto.preco +"</td>";
             td += "<td>" + produto.preco_promocional +"</td>";
             td += "<td>" + produto.gtin +"</td>";
             td += "<td>" + produto.unidade_medida +"</td>";
             td += "<td>" + produto.condicao +"</td>";

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
