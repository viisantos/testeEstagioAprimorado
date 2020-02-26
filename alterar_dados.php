<?php
    $link = mysqli_connect('localhost', 'root', '', 'sistema_computadores');
    if (!$link) //se não conseguiu se conectar ao banco
    {
        die('Não foi possível conectar: ' . mysqli_error());
    }
    //licoes aprendidas: se voce remover algum dos parametros de 'my_sqli_connect', o sistema não ira permitir o acesso ao banco de dados.
    ?>
<html>
<head>
<link rel="stylesheet" href="estilos/estilo_altera.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js">
</script>
<script src="controller_model/js/auxiliar.js" ></script>
<title>Alteração de dados</title>
</head>
<body id="corpo" class="c">

<h2 id="titulo">Alteração de Cadastro de aparelhos </h2>
<br>
<br>
<br>


  <div id="superior">
        <!--<input type="radio" name="busca" id="mostra_tudo" value="mostrar_tudo" checked>-->
        <form method="post" action="alterar_dados.php">
          <input type="text" name="busca" id="busca" placeholder='Pesquisar' required> 
          
          <input type='submit' value='buscar' class="realiza_busca">
      </form>

<!--
    <div class="busca_personalizada">

        <input type="radio" id="personalizada" name="busca" value="filtrar">
        Busca personalizada 
        <br>
    <div class="agrupa_opcoes">
    
    <div id="div_busca_1">
      <table id="busca_1">
        <tr>
          <td>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                    marca
                </span>
              </div>
            <input name="marca" type="text" class="form-control" aria-label="Input text com checkbox" />
              </div>
            </div>
           </td>
        </tr>
        <tr>
          <td>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  placa-mae
                </span>
              </div>
                  <input name="placa-mae" type="text" class="form-control" aria-label="Input text com checkbox">
              </div>
            </div>
          </td>
        </tr>
      </table>
</div> --> <!--fim div_busca_1--> 
   <!-- <div id="div_busca_2">
      <table id="busca_2">
        <tr>
          <td>
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                  hd
                </span>
              </div>
                <input name ="hd" type="text" class="form-control" aria-label="Input text com checkbox" >
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="input-group-text" id="inputGroup-sizing-sm">
                  vel processador
                  </span>
              </div>
            <input name ="vel-processador" type="text" class="form-control" aria-label="Input text com checkbox" >
              </div>
            </div>
          </td>
        </tr>
</table>
</div> --> <!--fim div_busca_2 -->
<!--
<div id="div_busca_3">
<table id="busca_3">
        <tr>
          <td>
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="input-group-text" id="inputGroup-sizing-sm">
                    modelo
                  </span>
              </div>
            <input name = "modelo" type="text" class="form-control" aria-label="Input text com checkbox" >
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                <span class="input-group-text" id="inputGroup-sizing-sm">
                    memoria-ram
                </span>
              </div>
                    <input type="text" name="memoria-ram" class="form-control" aria-label="Input text com checkbox" >
              </div>
            </div>
          </td>
        </tr>
</table>
</div> --> <!--fim div_busca_3 --> 
<!--
<div id="div_busca_4">
  <table id="busca_4">
        <tr>
          <td>
          <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <span class="input-group-text" id="inputGroup-sizing-sm">
                    marca do hd
                  </span>
              </div>
            <input name="marca_hd" type="text" class="form-control" aria-label="Input text com checkbox" />
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td>
          <input type="submit" value="buscar" name="buscar" id="buscar_pers" class="realiza_busca_pers" />
          </td>
        </tr>
</table>
-->
<!--
</div> --> <!-- fim div_busca_4 -->
<!--
</div> --> <!-- fim busca personalizada -->
<!--
</div> --> <!-- fim agrupa opcoes --> 




    <div class="tabela_dados">
        <table class="table table-striped" id="retorna_dados">
          <thead>
            <tr>
              <th scope="col">Editar</th>
              <th scope="col">Marca</th>
              <th scope="col">Modelo</th>
              <th scope="col">Placa-mae</th>
              <th scope="col">Memória RAM</th>
              <th scope="col">HD</th>
              <th scope="col">Marca</th>
              <th scope="col">Velocidade do processador</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            //if(isset($_POST['marca']) && isset($_POST['placa-mae']) && isset($_POST['hd']) && isset($_POST['vel-processador']) && isset($_POST['modelo']) && isset($_POST['memoria-ram']) && isset($_POST['marca_hd'])) {
              //o que consertei: a consulta, estava mal escrita
              //acessei o codigo antigo para pegar as funções necessarias e passar corretamente os parametros 
              //para '$result = mysqli_query($link,$consulta);'
              if(!empty($_POST['busca']))
              {

              $buscar = mysqli_real_escape_string($link,$_POST["busca"]);
              $consulta = "SELECT codigo,marca_computador,modelo_computador,placa_mae,mem_ram,hd_computador,marca_hd,velocidade from computadores where marca_computador like '$buscar%'" ; 
              $result = mysqli_query($link,$consulta); //pesquisar

              //echo "<tr onclick='apresenta_dados(".$dado['codigo'].")'>";
            //$exibe_linha_nos_campos = "SELECT codigo,marca_computador,modelo_computador,placa_mae,mem_ram,hd_computador,marca_hd,velocidade from computadores where codigo = $_POST[cod]" ;
             //auxilia a nomear a classe dos tds.
             while($dado = mysqli_fetch_array($result)){ //pesquisar <img src='".img.icons8.com/pastel-glyph/64/000000/edit.png."'
             echo "<tr>";
             echo " <td onclick='apresenta_dados(".$dado['codigo'].");'><img src='https://img.icons8.com/pastel-glyph/64/000000/edit.png' width='30px' height:'30px'></td>"; 
             echo " <td class='".$dado['codigo']."'>" .$dado['marca_computador']. " </td>";
             echo " <td class='".$dado['codigo']."'>" .$dado['modelo_computador']. "</td>";
             echo " <td class='".$dado['codigo']."'>" .$dado['placa_mae']. "</td>";
             echo " <td class='".$dado['codigo']."'>" .$dado['mem_ram']. "</td>";
             echo " <td class='".$dado['codigo']."'>" .$dado['hd_computador']. "</td>";
             echo "<td class='".$dado['codigo']."'>"  .$dado['marca_hd']." </td>";
             echo "<td class='".$dado['codigo']."'>" .$dado['velocidade']. "</td>";
             echo "<td id='auxiliar' class='".$dado['codigo']."'>" .$dado['codigo']. "</td>" ;
             echo "</tr>";
             }
          } 
           ?>
          <!--
            <tr>
              <th scope="row">2</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

            <tr>
              <th scope="row">3</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
             -->     
        </tbody>
        </table>
  </div>
  </div>  <!-- fim superior-->
  <form method="post" enctype="multipart/form-data" action="alterar_dados.php">
  <div class="tab1" id="tabela_1_altera"> 

      <table id="tabela1">
          <tr>
            <td class="labels">Marca<br><input name="marca_altera" id="_marca_altera" class="form-control" size=30  class="up_foto" type = "text" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"></input><br></td>
          </tr>
          <tr>
            <td class="labels">Placa Mae</td>
          </tr>
          <tr>
            <td class="labels"><input name="placa-mae_altera" id="_placa-mae_altera" class="form-control" size=30 type = "text" class="up_foto"  aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"></input><br></td>
          </tr>
          <tr>
            <td class="labels">HD</td>
          </tr>
          <tr>
            <td class="labels"><input name="hd_altera" id="_hd_altera" class="form-control" size=30 type = "text" class="up_foto"  aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"></input><br></td>
          </tr>
          <tr>
            <td class="labels">Velocidade do processador</td>
          </tr>
          <tr>
            <td class="labels"><input name="vel-processador_altera" id="_vel-processador_altera" class="form-control" size=30 type = "text" class="up_foto" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"></input></td>
          </tr>
      </table>
  </div>

<div class = "tab2" id="tabela_2_altera">
  <table class="tabela2">
    <tr>
      <td class="labels">Modelo<br><input name="modelo_altera" id="_modelo_altera" class="form-control" size=30 type = "text" class="up_foto"  aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"></input><br></td>
    </tr>
    <tr>
      <td class="labels">Memoria RAM</td>
    </tr>
    <tr>
      <td class="labels"><input name="memoria-ram_altera" id="_memoria-ram_altera" class="form-control" size=30 type = "text" class="up_foto"  aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"></input><br></td>
    </tr>
    <tr>
      <td class="labels">Marca do HD</td>
    </tr>
    <tr>
      <td>
      <input name="marca_hd_altera" id="_marca_hd_altera" class="form-control" class="form-control_altera" size=30 type = "text" class="up_foto"  aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" ><br>
    </td>
    </tr>

    <tr>
      <td>Alterar foto do aparelho?<br></td>
    </tr>
    <tr>
      <td><input type="file"  name="upload_foto_altera"   class="up_foto"  aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default"/></td>
    </tr>
    
  </table>
</div>
  
<br>
<br>

<div class="rodape_botoes_altera" id="botoes_altera">
      <!--<div class="navegacao" id="navegacao_altera">-->
        <table class="organizar_botoes">
          <tr>
            <td>
              <input type='submit' class="btn btn-outline-dark" name="alteracao" value="Alterar Cadastro" class="nav" onclick="" id="alt">
            </td>
            <td>
              <button class="btn btn-outline-dark" name="apagar" value="Excluir produto" class="nav" onclick="chamaExcluir()" id="del">Excluir produto</button>
            </td>  
            <td>
              <button class="btn btn-outline-dark" onclick="window.location.href='../inicial.php'">Retornar a pagina inicial</button>
            </td> 
            <td>
            <input type="text" name="auxiliar_recebe_id" id="recebe_passa_id">
            </td>
          </tr>
      </table>

     <!-- </div> -->
     
</div>
<?php
    
    //tirado da internet, utilizacao: permitir que um form funcione com multiplos botoes submit.
      function get_post_action($name, $name1)
      {
          $params = func_get_args();
      
          foreach ($params as $name) {
              if (isset($_POST[$name])) {
                return $name;
              }
              else if (isset($_POST[$name1])) {
                return $name1;
            }
          }
      }

      switch (get_post_action('alteracao', 'apagar')) {
        case 'alteracao':
          $marca_altera = $_POST['marca_altera'];
          $placa_mae_altera = $_POST['placa-mae_altera'];
          $hd_altera = $_POST['hd_altera'];
          $processador_altera = $_POST['vel-processador_altera'];
          $modelo_altera = $_POST['modelo_altera'];
          $ram_altera = $_POST['memoria-ram_altera'];
          $marca_hd_altera = $_POST['marca_hd_altera'];
          $id = $_POST['auxiliar_recebe_id'];
          //Alterar a foto
          $array = explode(".",strtolower($_FILES['upload_foto_altera']['name']));
          /*separa o nome do arquivo pelo ".",
           cada item separado pelo "." fica armazenado numa posicao do array,
           e o texto é colocado em caixa baixa,
           para garantir a uniformidade no
           tamanho dos caracatereres. */

          $ext = $array[sizeof($array) - 1]; 
          //Pegando extensão do arquivo (última posição do array)
          /*neste caso o array possui duas posições, pois a string foi separada somente pelo "." */
          
          $new_name = date("Y.m.d-H.i.s") . "." . $ext;
          //Definindo um novo nome para o arquivo
          //coloca como nome do arquivo a data em que ele foi carregado, segundo um formato já definido pelo php. */

          $dir = '../guarda_fotos/';
           //Diretório para uploads 
           //explicitar o destino da foto.

          move_uploaded_file($_FILES['upload_foto_altera']['tmp_name'], $dir.$new_name); 
          //Fazer upload do arquivo
          //fiquei com uma pequena duvida sobre evitar repetição de imagens iguais mas com nomes diferentes...
         
          $alterou = mysqli_query($link, "UPDATE computadores SET marca_computador = '$marca_altera', modelo_computador = '$modelo_altera', placa_mae = '$placa_mae_altera', mem_ram = '$ram_altera', hd_computador = '$hd_altera', marca_hd = '$marca_hd_altera', velocidade = '$processador_altera', foto = '$new_name'  WHERE codigo = '$id'");
          
          if($alterou){//se houve alteracao
          ?>
  <div style="display:block; vertical-align:middle; margin-top:10%; margin-left:40%;" class="modal" tabindex="-1" role="dialog" id='alert_modal'>
  <table>
    <tr>
      <td>
        <center>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><?php echo "ok"; ?></h5>
              <button type="button" class="close" onclick="$('#alert_modal').fadeOut(300);" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><?php echo "alterações feitas com sucesso!"; ?></p>
            </div>
          </div>
        </div>
        </center>
      </td>
    </tr>
  </table>
</div>
          <?php
              }else{
                echo "Operação não concluída.";
              }

                break;
        case 'apagar':
          $id = $_POST['auxiliar_recebe_id'];
          $excluiu = mysqli_query($link,"DELETE from computadores where codigo = $id ");
            break;
    }
?>

  </form>
  </body>
</html>