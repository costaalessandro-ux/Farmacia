<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <center>
        <form action="insertProduto.php" method="post">
            <center><h1> CADASTRO DE PRODUTOS </h1></center>
            <input type="text" name="nome" id="id" placeholder="NOME DO PRODUTO" required><p>
            <input type="number" name="quantidade" id="quantidade" placeholder="QUANTIDADE"><p>
            <input type="number" name="valor" id="valor" step="0.010" placeholder="VALOR UNITARIO" required><p>
            <textarea id="descricao" name="descricao" rows="5" cols="25" placeholder="DESCRICAO DO PRODUTO"></textarea><p>
            <input type="submit" name="ENVIAR" id="ENVIAR"> <input type="reset" name="reset" id="REDEFINIR">
            <p><a href="../../menu/menu.php">VOLTAR</a></p>
        </form>
        </center>
    </body>
</html>
