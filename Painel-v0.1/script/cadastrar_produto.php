<?php
    session_start();
    include ("conexao.php");

    $sku = mysqli_real_escape_string($mysqli, $_POST["sku"]);
    $quantidade = mysqli_real_escape_string($mysqli, $_POST["quantidade"]);
    $produto = mysqli_real_escape_string($mysqli, $_POST["produto"]);
    $peso = mysqli_real_escape_string($mysqli, $_POST["peso"]);
    $cor = mysqli_real_escape_string($mysqli, $_POST["cor"]);
    $voltagem = mysqli_real_escape_string($mysqli, $_POST["voltagem"]);
    $categoria = mysqli_real_escape_string($mysqli, $_POST["categoria"]);
    $marca = mysqli_real_escape_string($mysqli, $_POST["marca"]);


    $sql="INSERT INTO produto(sku, quantidade, produto, peso, cor, voltagem,
     categoria,marca,) 
    VALUES ('$sku', '$quantidade', '$produto', '$peso', '$cor', '$voltagem', 
    '$categoria', '$categoria', '$marca')";

    if(mysqli_query($mysqli, $sql)){
        echo "Usuario cadastro com sucesso!";
    }else{
        echo "Erro".mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
