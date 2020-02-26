<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script type="text/javascript" src="controller_model/js/validacao_cadastro.js"></script> -->
    <link rel="stylesheet" href="estilos/estilo_cadastro.css">
    
    <title>Cadastro de Aparelhos</title>
    
   
  </head>
  <body id="corpo" class="c">
    

  <h2 id="titulo">Cadastro de aparelhos </h2>
    <hr>
    <div id="formulario" class="input-group input-group-sm mb-3">
      <form method="post" enctype="multipart/form-data" action="controller_model/processa_dados.php">
      <div class="tab1" > 
          <table id="tabela1">
              <tr>
                <td class="labels" width="200px" height="20px">Marca *<br>
                <input type=text autocomplete="off" name="marca" id="marca_computador" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"  required/><br></td>
              </tr>
              <tr>
                <td class="labels">Placa Mae *</td>
              </tr>
              <tr>
                <td class="labels"><input type=text autocomplete="off" name="placa-mae" id="placa_mae_computador" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required ></input><br></td>
              </tr>
              <tr>
                <td class="labels">HD *</td>
              </tr>
              <tr>
                <td class=><input type=text autocomplete="off" name="hd" id="hd_computador" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required></input><br></td>
              </tr>
              <tr>
                <td class="labels">Velocidade do processador *</td>
              </tr>
              <tr>
                <td class=><input type=text autocomplete="off" name="vel-processador" id="vel-processador-id" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required></input></td>
              </tr>
          </table>
      </div>

    <div class = "tab2">
      <table class="tabela2">
        <tr>
          <td class="labels">Modelo *<br><input type=text autocomplete="off" name="modelo" id="modelo_computador" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required></input><br></td>
        </tr>
        <tr>
          <td class="labels">Memoria RAM *</td>
        </tr>
        <tr>
          <td class="labels"><input type=text autocomplete="off" name="memoria-ram" id="memoria_ram_id" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"  required></input><br></td>
        </tr>
        <tr>
          <td class="labels">Marca do HD *</td>
        </tr>
        <tr>
          <td>
          <input type="text" autocomplete="off" name="marca_hd" id="marca_hd_id" size=30 class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"  required> <br>
        </td>
        </tr>

        <tr>
          <td>Foto do aparelho:<label id="obr_8">*</label><br></td>
        </tr>
        <tr>
          <td><input type="file" name="upload_foto" id="upload_foto_id" class="up_foto" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" required/></td>
        </tr>

      </table>
    </div>

   <br>
   <br>
   <br>
   <br>
   <br>
   

   <div class="botoes">
    <table id="botoes_rodape">
      <tr>
        <td>
          <input type="submit" class="btn btn-outline-dark" value="Cadastrar" class="btoes" onclick="valida()">
        </td>
        <td>
          <input type="reset" class="btn btn-outline-dark" value="Limpar" class="btoes">
        </td>
        <td>
          <button type="button" class="btn btn-outline-dark" onclick="window.location.href = 'inicial.php'">Retornar a página inicial</button>
        </td>
      </tr>
      </table>
    </div>
  
  
  </form>
</div>
<?php
  if(isset($_GET['success']))
  {

    if($_GET['success'] == "true")
    {
      $titulo = "Ok";
      $mensagem = "Cadastro feito com sucesso!";
    }
    else
    {
      $titulo = "Falha";
      $mensagem = "Aparelho não cadastrado";
    }
?>
<div class="modal" tabindex="-1" role="dialog" id='alert_modal'>
  <table>
    <tr>
      <td>
        <center>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php echo $titulo; ?></h5>
              <button type="button" class="close" onclick="$('#alert_modal').fadeOut(300);" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo $mensagem; ?></p>
            </div>
          </div>
        </div>
        </center>
      </td>
    </tr>
  </table>
</div>
<?php
  }
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body >
</html>