<html>
    <head>
        <link rel="stylesheet"  href="estilos/estilo_inicial.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Sistema de gerenciamento de computadores</title>
    </head>

    <body class="c">
        <h2 id="titulo">Sistema de gerenciamento de computadores</h2>
        <hr>
        <br>
            <table id="tab_botoes">
               <tr>
                <td>
                    <button type="button" class="btn btn-dark" name="retorna" value="Cadastrar Computador" class="nav" onclick="window.location.href = 'cadastro.php'">Cadastrar computador</button>
                </td>
                <td>
                    <button type="button" class="btn btn-dark" name="retorna" value="Consultar" class="nav" id="cons" onclick="window.location.href = 'alterar_dados.php'">Consultar</button>
                </td>
                </tr>
        </table>
            </body>
</html>