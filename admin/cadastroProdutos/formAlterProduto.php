<!DOCTYPE html>
<?php
require_once '../../conexao.php';
require_once '../../funcoes.php';

$idProd = $_GET['idProd'];
$linha = le($conn, $idProd);
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
        <input type="hidden" name="idProd" value="<?php echo $linha["idProd"]; ?>">
        <input type="text" name="nomeProd" id="nomeProd" value="<?php echo $linha["nomeProd"]; ?>" placeholder="NOME"><p>
        <input type="number" name="quantidadeProd" id="quantidadeProd" value="<?php echo $linha["quantidadeProd"]; ?>" placeholder="QUANTIDADE"><p>
        <input type="number" name="preco" id="preco" step="0.010" value="<?php echo $linha["preco"]; ?>" placeholder="VALOR UNITARIO"><p>
        <input type="text" name="descricao" id="descricao" value="<?php echo $linha["descricao"]; ?>" placeholder="DESCRICAO"></p>
        <p><input type="submit" name="ENVIAR" id="ENVIAR" value="Enviar"></p>
    </form>
    <p>
        <a href="selectProduto.php">VOLTAR</a>
    </p>
</body>
</html>
