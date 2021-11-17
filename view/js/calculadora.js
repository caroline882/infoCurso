$(document).ready(function() {

    console.log("sou o campo numero:" + $('#numero2').val());
    $('#btnCalcular').on("clik", function() {

        var valor = $('#numero').val();
        var valor = $('#numero2').val();

        var resultadoCalculo = numero + numero2;
        $('#resultado'). val(resultadoCalculo);
        
    }
    )

});