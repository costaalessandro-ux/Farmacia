<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Vendas</title>
    </head>
    <header>
        <center><h1> REGISTRO DE VENDAS</h1></center>
    </header>
    <body>
        É necessario criar uma logica para registrar as compras realizadas. 
        O sistema deve informa a quantidade de itens comprados e o valor total!
        <form method="post" action="insertnotafiscal.php">
            <label for="codigo">Codigo</label>
            <input type="number" id="codigo" name="codigo" required>
            <label for="quantidade">Qtd</label>
            <input type="number" id="quantidade" name="quantidade">
            <label for="produto">Produto</label>
            <input type="text" id="produto" name="produto">
            <label for="valor">Valor Total do Item</label>
            <input type="number" id="valor" step="0.010" name="valor">
            <input type="submit" id="enviar" name="enviar">
            <input type="reset" id="redefinir" name="redefinir">
        </form>
    </body>
    <footer>
        <p>
        <a href="../menu.php">VOLTA</a>
        </p>
    </footer>
</html>
