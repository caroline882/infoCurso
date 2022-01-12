$( document ).ready(function() {

    var urlBackEnd = "http://localhost:3000/controllers/cadastroCliente.php";

    $(".btn-editar").on("click", function() {
        var id = $(this).val();
        buscarDadoscliente(id);
        $(".modal").modal('show');
    });

    function buscarDadoscliente(id) {

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

});
