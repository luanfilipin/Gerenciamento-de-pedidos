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
                <h1>Crie sua conta <br>e comece a gerenciar seus pedidos.</h1>
                <p>Ja possui uma conta? acesse <a href="index.html">aqui</a></p>
            </div>
            <?php
            /**
             * Se o cadastro for realizado com sucesso retornar uma notificacao de sucesso.
             * A funcao isset informa se a variavel foi iniciada
             */
            if(isset($_SESSION['status_cadastro'])):
            ?>
            <div class="notificacao sucesso">
                <p><strong>Usuario criado com sucesso!</strong></p>
            </div>
            <?php
            /**
             * endif finaliza o bloco do IF.
             * unset remove a mensagem para que caso o email ja conste na nossa DB nao mostre as duas notificacoes.
             */
            endif;
            unset($_SESSION['status_cadastro']);
            ?>
            <?php
            // Se o email ja consta na nossa DB retornar a informacao de usuario existente.
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
                <input type="password" maxlength="10" placeholder="Senha" name="senha" required>
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