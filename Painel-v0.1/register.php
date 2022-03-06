<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-account.css">
    <title>Register</title>
</head>

<body>
    <form action="script/create_account.php" method="POST">
        <div class="janela">
            <div class="conteudo-top">
                <p>Crie sua conta <br>e comece a gerenciar seus pedidos.</p>
            </div>
            <?php
            if(isset($_SESSION['status_cadastro'])):
            ?>
            <div class="notificacao sucesso">
                <p><strong>Usuario criado com sucesso!</strong></p>
            </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>
            <?php
            if (isset($_SESSION['usuario_existente'])) :
            ?>
                <div class="notificacao falha">
                    <p><strong> O e-mail ja esta em uso!</strong></p>
                </div>
            <?php
            endif;
            unset($_SESSION['usuario_existente']);
            ?>
            <div class="conteudo">
                <input type="text" placeholder="Nome" name="nome" required>
            </div>
            <div class="conteudo">
                <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="conteudo">
                <input type="password" placeholder="Senha" name="senha" required>
            </div>

            <div class="conteudo iagree">
                <label><input type="checkbox" required>I agree to the <a href="">terms of conditions</a></label>
            </div>
            <div class="conteudo button">
                <button>Register</button>
            </div>
        </div>
    </form>

</body>

</html>