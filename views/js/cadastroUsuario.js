$(document).ready(function() {
  var urlBackEnd = "http://localhost/infoCurso/controllers/cadastroCliente.php";
  
  listarUsuario();


    $(".btn-editar").on("click", function() {
        var id = $(this).val();
        $(".modal").modal('show');
    });

    function listarUsuario() {

        $.get(urlBackEnd).done(function(listadeUsusarios) {
                montarTabela(listadeUsusarios)

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

    function montarTabela(listadeUsuarios){
        var tabelaHtml = montarCabecalho();
        tabelaHtml += montarCorpoTabela (listadeUsuarios);

        $("#idTabelaUsuario").html(tabelaHtml);
    }
    
    function montarCabecalho(){
          var cabecalho = (
              
            "<thead>"+
              "<tr>" +
                "<th>" +
                  "Id" +
                "</th>" +
                "<th>" +
                  "nome" +
                "</th>" +
                "<th>" +
                  "usuario" +
                "</th>" +
                "<th>" +
                  "email" +
                "</th>" +
                "<th>" +
                  "senha" +
                "</th>" +
                "<th>" +
                  "status" +
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
             td += "<td>" + statusDesc +"</td>";
             td += "<td>" + usuario.email_recuperacao +"</td>";

             var btnEditar = "<button type='button' value=" + usuario.id + "class='btn btn-warning btnEditar'>Editar <i class='far fa-edit'></i></button>";
             var btnExcluir = "<button type='button' value=" + usuario.id + "class='btn btn-danger btnExcluir'>Excluir <i class='far fa-trash-alt'></i></button>";

             td += "<td>" + btnEditar + btnExcluir + "</td>";

             tr = td + "</tr>";
             body += tr;
        
        });    
        
        
         body += "</body>";
         return body;
    }
});
