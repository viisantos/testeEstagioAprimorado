$(document).ready(function() {
    $("#mostra_tudo").prop("checked", true);   
$('input[name="busca"]').change(function () {
    if ($('input[name="busca"]:checked').val() == "mostrar_tudo") {
        $('.realiza_busca').show();
        $('.agrupa_opcoes').hide();
    } else if($('input[name="busca"]:checked').val() == "filtrar"){
        $('.agrupa_opcoes').show();
        $('.realiza_busca').hide();
    }
      
})
});

// $('#busca').keyup(function()
// {
//   pesquisar();
// });
function pesquisar()
{

        
    $.ajax({
      type: 'POST',
      url:  'alterar_dados.php',
      
      data: { //data é um array associativo que armazena os valores passados via post.
          _busca: $("#busca").val()
      },
      success: function(data) 
      {
        $('#retorna_dados').html(data);
      }
              
    });
}

function apresenta_dados(codigo){ //codigo do computador é recebido como parãmetro 
    var computador = document.getElementsByClassName(codigo); //computador armazena um array com todos os elementos da classe cujo valor está em 'codigo'
    //cada caixa de texto destinada a alteracao de dados recebera o conteudo de uma posicao do array. 
    //cada posicao do array guarda o valor contido em cada elemento pertencente a classe cujo valor/nome esta em 'codigo'.
    document.getElementById("_marca_altera").value = computador[0].innerHTML;
    document.getElementById("_modelo_altera").value = computador[1].innerHTML;
    document.getElementById("_placa-mae_altera").value = computador[2].innerHTML;
    document.getElementById("_memoria-ram_altera").value = computador[3].innerHTML;
    document.getElementById("_hd_altera").value = computador[4].innerHTML;
    document.getElementById("_marca_hd_altera").value = computador[5].innerHTML;
    document.getElementById("_vel-processador_altera").value = computador[6].innerHTML;
    document.getElementById("recebe_passa_id").value = computador[7].innerHTML;
}
