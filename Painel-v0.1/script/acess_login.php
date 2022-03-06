<?php
include ('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: ../index.html');
    exit();
}

$email= mysqli_real_escape_string($mysqli, $_POST["email"]);
$senha= mysqli_real_escape_string($mysqli, $_POST['senha']);

$query= "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location:../painel.php');
    exit();
}else{
    header('Location:../index.html');
    exit();
}