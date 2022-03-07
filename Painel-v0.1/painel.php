<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-painel.css">
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
            <li><a href="catalogo.php"><img class="icone" src="img/catalogo.png" alt="">Catalago</a></li>
            <li><a href="#"><img class="icone" src="img/estoque.png" alt="">Estoque</a></li>
            <li><a href="#"><img class="icone" src="img/estatistica.png" alt="">Estatística</a></li>
            <li><a href="#"><img class="icone" src="img/logistica.png" alt="">Logistica</a></li>
            <li><a href="#"><img class="icone" src="img/rastreio.png" alt="">Rastreio</a></li>
            <li><a href="#"><img class="icone" src="img/suporte.png" alt="">Suporte</a></li>
        </ul>
    </nav>
    <div class="estatus-pedido">
        <div class="status status-novo">
            <h1>Novos</h1>
            <p>0</p>
        </div>
        <div class="status status-aprovado ">
            <h1>Aprovados</h1>
            <p>0</p>
        </div>
        <div class="status status-cancelados">
            <h1>Cancelados</h1>
            <p>0</p>
        </div>
        <div class="status status-total-vendido">
            <h1>Total vendido</h1>
            <p>R$ 00.000,00</p>
        </div>
    </div>
</body>

</html>