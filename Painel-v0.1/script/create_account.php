<?php
    include ("conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $password = $_POST["senha"];

    $sql="INSERT INTO usuario(nome, email, senha ) 
    VALUES ('$nome', '$email', '$password')";

    if(mysqli_query($mysqli, $sql)){
        echo "Usuario cadastro com sucesso!";
    }else{
        echo "Erro".mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
