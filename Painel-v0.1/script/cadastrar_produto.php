<?php
session_start();
include("conexao.php");

$sku = mysqli_real_escape_string($mysqli, $_POST["sku"]);
$quantidade = mysqli_real_escape_string($mysqli, $_POST["quantidade"]);
$produto = mysqli_real_escape_string($mysqli, $_POST["produto"]);
$peso = mysqli_real_escape_string($mysqli, $_POST["peso"]);
$cor = mysqli_real_escape_string($mysqli, $_POST["cor"]);
$voltagem = mysqli_real_escape_string($mysqli, $_POST["voltagem"]);
$categoria = mysqli_real_escape_string($mysqli, $_POST["categoria"]);
$marca = mysqli_real_escape_string($mysqli, $_POST["marca"]);
$descricao = mysqli_real_escape_string($mysqli, $_POST["descricao"]);


// faz a insercao das informacoes dentro da DB.
$sql = "INSERT INTO produto(sku, quantidade, produto, peso, cor, voltagem, categoria, marca, descricao) 
VALUES ('$sku', '$quantidade', '$produto', '$peso', '$cor', '$voltagem', '$categoria', '$marca', '$descricao')";

// caso a conexao e a insercao nao tenha problemas o meso e inserido na DB
if ($mysqli->query($sql) === true) {
    $_SESSION['produto_cadastrado'] = true;
}

mysqli_close($mysqli);

 // mantem o usuario na pagina atual
 header('Location: ../catalogo.php');
 exit;