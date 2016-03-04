/**
 * Created by diego on 04/03/16.
 */
$(function(){/*
    $("tr").click(function(){
        var teste = $(this).children(".chave").text();
        alert(teste);
        $('#myModal').modal('show');
    });*/
    $("input[type='button']").click(function(){
        var indice = $(this).parent().siblings(".chave").text();
        $.post('visualizaCliente.php', {indice: indice}, function(retorno){
            //$("#modalCliente").modal({ backdrop: 'static' });
            $("#dadosCliente").html(retorno);
            $('#myModal').modal('show');
        });
    });
});