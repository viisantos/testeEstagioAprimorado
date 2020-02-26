<?php

    if(isset($_POST['marca']) && isset($_POST['placa-mae'])) //se os campos foram preenchidos
    {
        $link = mysqli_connect('localhost', 'root', '', 'sistema_computadores');
        if (!$link) //se não conseguiu se conectar ao banco
        {
            die('Não foi possível conectar: ' . mysqli_error());
        }

        $marca = $_POST['marca'];
        $placa_mae = $_POST['placa-mae'];
        $hd = $_POST['hd'];
        $processador = $_POST['vel-processador'];
        $modelo = $_POST['modelo'];
        $ram = $_POST['memoria-ram'];
        $marca_hd = $_POST['marca_hd'];

        $array = explode(".",strtolower($_FILES['upload_foto']['name'])); //separa o nome do arquivo pelo "."

        $ext = $array[sizeof($array) - 1]; //Pegando extensão do arquivo (última posição do array)
        $new_name = date("Y.m.d-H.i.s") . "." . $ext; //Definindo um novo nome para o arquivo
        $dir = '../guarda_fotos/'; //Diretório para uploads 
        move_uploaded_file($_FILES['upload_foto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
        //echo("Imagen enviada com sucesso!");

        $result = mysqli_query($link, "INSERT INTO computadores(marca_computador, modelo_computador, placa_mae, mem_ram, hd_computador, marca_hd, velocidade, foto) VALUES ('$marca','$modelo','$placa_mae','$ram','$hd','$marca_hd','$processador','$new_name')");
        
        //mysqli_close($link); //fecha conexão

        if($result) //se alguma linha foi inserida
            header("location: ../cadastro.php?success=true");
        else
            header("location: ../cadastro.php?success=false");
    }