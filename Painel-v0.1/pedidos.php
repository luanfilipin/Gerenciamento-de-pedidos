<!DOCTYPE html>
<html lang="en">

<?php
include('script/conexao.php');
$consulta = "SELECT * FROM pedido";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-pedidos.css">
    <title>Painel de Gerenciamento</title>
</head>

<body>
    <header>
        <div class="cabecalho">
        </div>
    </header>
    <hr>
    <nav class="menu">
        <ul>
            <li><a href="painel.php"><img class="icone" src="img/home.png" alt="">Dashboard</a></li>
            <li><a href="pedidos.php"><img class="icone" src="img/pedido.png" alt="">Pedidos</a></li>
            <li><a href="#"><img class="icone" src="img/estoque.png" alt="">Estoque</a></li>
            <li><a href="catalogo.php"><img class="icone" src="img/catalogo.png" alt="">Catalago</a></li>
            <li><a href="#"><img class="icone" src="img/estatistica.png" alt="">Estatística</a></li>
            <li><a href="#"><img class="icone" src="img/logistica.png" alt="">Logistica</a></li>
            <li><a href="#"><img class="icone" src="img/rastreio.png" alt="">Rastreio</a></li>
            <li><a href="#"><img class="icone" src="img/suporte.png" alt="">Suporte</a></li>
        </ul>
    </nav>
    <form action="script/deletar.php">
        <div class="geral-pedidos">
            <table>
                <tr>
                    <th>Pedido</th>
                    <th>Status</th>
                    <th>Fatura</th>
                    <th>Cliente</th>
                    <th>Valor</th>
                    <th>Data da compra</th>
                    <th>Pagamento</th>
                    <th>Marketplace</th>
                    <th>Chat</th>
                    <th>Rastrear</th>
                    <th>Detalhes</th>
                    <th>Ações</th>
                </tr>
                <?php while ($dado = $con->fetch_array()) { ?>
                    <tr>
                        <td><?php echo $dado["id"]; ?></td>
                        <td><?php echo $dado["status"]; ?></td>
                        <td><?php echo $dado["numero_fatura"]; ?></td>
                        <td><?php echo $dado["nome_cliente"]; ?></td>
                        <td><?php echo $dado["valor_pedido"]; ?></td>
                        <td><?php echo $dado["data_da_compra"]; ?></td>
                        <td><?php echo $dado["forma_de_pagamento"]; ?></td>
                        <td><?php echo $dado["marketplace"]; ?></td>
                        <td><a href="#"><img class="icone-chat" src="img/chat-dialogo.png" alt=""></a></td>
                        <td>Teste</td>
                        <td>Teste</td>
                        <td>Cancelar</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </form>
</body>

</html>