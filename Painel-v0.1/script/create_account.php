<?php
session_start();
include("conexao.php");
/**
 * Pega as informacoes dos inputs.
 * A funcao mysqli_real_escape_string tornao recebimento dos dados mais seguros pois previne o SQL Injection.
 * A funcao Trim retira os espacos do inicio e final da string.
 * Sera adicionado a senha em modo de cryptografia md5 para fortificar a seguranca da mesma.
 */
$nome = mysqli_real_escape_string($mysqli, trim($_POST["nome"]));
$email = mysqli_real_escape_string($mysqli, trim($_POST["email"]));
$password = mysqli_real_escape_string($mysqli, trim($_POST["senha"]));

// verificar se dentro da DB tabela usuario, coluna email se possui o email cadastrado e coloca o retorno dentro da variavel 'total'.
$sql = "SELECT count(*) AS total FROM usuario WHERE email = '$email'";

// realiza a consulta da DB das informacoes.
$result = mysqli_query($mysqli, $sql);

// retorna um conjunto de resultados das linhas existentes.
$row = mysqli_fetch_assoc($result);

// verifica o retorno da variavel 'total' se for 1 ja existe.
if ($row['total'] == 1) {
    $_SESSION['usuario_existente'] = true;
    header('Location: ../register.php');
    exit;
}

// faz a insercao das informacoes dentro da DB.
$sql = "INSERT INTO usuario(nome, email, senha, data_cadastro ) VALUES ('$nome', '$email', '$password', NOW())";

// caso a conexao e a insercao nao tenha problemas o meso e inserido na DB
if ($mysqli->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

// encerrar a conexao com a DB
mysqli_close($mysqli);

 // mantem o usuario na pagina atual
header('Location: ../register.php');
exit;
