<?php
    session_start();
    include ("conexao.php");

    $nome = mysqli_real_escape_string($mysqli, trim($_POST["nome"]));
    $email = mysqli_real_escape_string($mysqli, trim($_POST["email"]));
    $password = mysqli_real_escape_string($mysqli, trim($_POST["senha"]));

    $sql = "SELECT count(*) AS total FROM usuario WHERE email = '$email'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1){
        $_SESSION['usuario_existente'] = true;
        header('Location: ../register.php');
        exit;
    }

    $sql="INSERT INTO usuario(nome, email, senha, data_cadastro ) VALUES ('$nome', '$email', '$password', NOW())";

    if($mysqli->query($sql) === TRUE){
        $_SESSION['status_cadastro'] = true;
    }


    mysqli_close($mysqli);

    header('Location: ../register.php');
    exit;
?>
