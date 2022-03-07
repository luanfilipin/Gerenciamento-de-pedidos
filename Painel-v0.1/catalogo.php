<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-catalogo.css">
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
    <form action="script/cadastrar_produto.php" method="POST">
        <div class="janela-catalogo">
            <div class="alinhamento">
                <label for="sku"><strong>Sku:</strong></label>
                <input type="text" name="sku" require>
            </div>
            <div class="alinhamento">
                <label for="quantidade"><strong>Quantidade:</strong></label>
                <input type="text" name="quantidade" require>
            </div>
            <div class="alinhamento">
                <label for="produto"><strong>Produto:</strong></label>
                <input type="text" name="produto" require>
            </div>
            <div class="alinhamento">
                <label for="peso"><strong>Peso:</strong></label>
                <input type="text" name="peso" require>
            </div><br>
            <div class="alinhamento">
                <label for="cor"><strong>Cor:</strong></label>
                <input type="text" name="cor" require><br>
            </div>
            <div class="alinhamento">
                <label for="voltagem"><strong>Voltagem:</strong></label>
                <input type="text" name="voltagem" require>
            </div>
            <div class="alinhamento">
                <label for="categoria"><strong>Categoria:</strong></label>
                <input type="text" name="categoria" require>
            </div>
            <div class="alinhamento">
                <label for="marca"><strong>Marca:</strong></label>
                <input type="text" name="marca" require><br>
            </div><br>
            <div class="alinhamento-descricao">
                <label for="descricao"><strong>Descrição do produto: </strong></label>
                <textarea name="descricao"></textarea>
            </div><br>
            <!-- <div class="alinhamento-foto">
                <label for="foto"><strong>Adicionar foto:</strong> </label>
                <input type="file" name="foto"><br>
            </div> -->
            <div class="alinhamento-button">
                <button type="submit"><strong>CADASTRAR</strong></button>
            </div>

        </div>
    </form>
</body>

</html>