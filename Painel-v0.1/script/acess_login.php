<?php
include ('conexao.php');

// verifica se os campos email e senha nao esta fazios.
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../index.html');
    exit();
}

/**
 * Pega as informacoes dos inputs.
 * A funcao mysqli_real_escape_string tornao recebimento dos dados mais seguros pois previne o SQL Injection.
 */
$email= mysqli_real_escape_string($mysqli, $_POST["email"]);
$senha= mysqli_real_escape_string($mysqli, $_POST['senha']);

// valida se o email e senha sao os mesmos da DB
$query= "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

// consulta as informacoes usando a conexao e a validacao a cima.
$result = mysqli_query($mysqli, $query);
// retorna um conjunto de resultados das linhas existentes.
$row = mysqli_num_rows($result);

// caso a consulta retorne 1(verdadeiro) o usuario e direcionado para o Painel caso contrario o mesmo fica na mesma pagina.
if($row == 1){
    $_SESSION['email'] = $email;
    header('Location:../painel.php');
    exit();
}else{
    header('Location:../index.html');
    exit();
}