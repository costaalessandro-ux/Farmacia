<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Produtos</title>
    </head>
    <header>
        <center><h1> CADASTRO DE PRODUTOS </h1></center>
    </header>
    <body>
    <center>
        <form action="insertCadastro.php" method="post">
            <input type="text" name="nome" id="id" placeholder="NOME DO PRODUTO"><p>
            <input type="number" name="quant" id="quant" placeholder="QUANTIDADE"><p>
            <input type="number" name="valor" id="valor" step="0.010" placeholder="VALOR UNITARIO"><p>
            <input type="text" name="descricao" id="descricao" placeholder="DESCRICAO"><p>
            <input type="submit" name="ENVIAR" id="ENVIAR"> <input type="reset" name="reset" id="REDEFINIR">
            <p><a href="selectCadastro.php">VOLTAR</a></p>
        </form>
        </center>
    </body>
    <footer>
       
    </footer>
</html>
