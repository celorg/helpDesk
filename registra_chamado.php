<?php

    session_start();

    //Trabalhar na montagem do texto
    $titulo =  str_replace( '#', '-', $_POST['titulo'] );
    $categoria = str_replace('#','-',$_POST['categoria'] );
    $descricao = str_replace( '#','-', $_POST['descricao'] );

    $texto = $_SESSION['id'] . '#' . implode('#', $_POST ) . PHP_EOL;
    // $texto = $titulo . '#' . $categoria . '#' . $descricao;

    // Abrindo um novo arquivo
    $arquivo = fopen('../../App_help_desk/arquivo.hd','a');

    // Escrevendo dentro do arquivo
    fwrite($arquivo, $texto);

    // Fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>