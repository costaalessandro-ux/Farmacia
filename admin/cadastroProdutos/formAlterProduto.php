<!DOCTYPE html>
<?php
require_once '../../conexao.php';
require_once '../../funcoes.php';

$id = $_GET['id'];
$linha = le($conn, $id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar Produtos</title>
    </head>
    <body>
    <center><h1> ATUALIZAÇÃO DE PRODUTOS </h1></center>
    <form action="alterProduto.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $linha["id"]; ?>">
        <input type="text" name="nome" id="nome" value="<?php echo $linha["nome"]; ?>" placeholder="NOME"><p>
        <input type="number" name="quantidade" id="quantidade" value="<?php echo $linha["quantidade"]; ?>" placeholder="QUANTIDADE"><p>
        <input type="number" name="valor" id="valor" step="0.010" value="<?php echo $linha["valor"]; ?>" placeholder="VALOR UNITARIO"><p>
        <input type="text" name="descricao" id="descricao" value="<?php echo $linha["descricao"]; ?>" placeholder="DESCRICAO"></p>
        <p><input type="submit" name="ENVIAR" id="ENVIAR"></p>
    </form>
    <p>
        <a href="selectProduto.php">VOLTAR</a>
    </p>
</body>
</html>
