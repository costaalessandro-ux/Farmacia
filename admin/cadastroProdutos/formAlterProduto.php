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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../../estilo/estiloAlterProduto.css" rel="stylesheet" type="text/css">
        <title>Alterar Produtos</title>
    </head>
    <body>
    <center><h1> ATUALIZAÇÃO DE PRODUTOS </h1></center>
    <div class="container">
        <div class="text-center">
            <div class="mb-3">
                <form action="alterProduto.php" method="GET">

                    <input type="hidden" name="idProd" value="<?php echo $linha["idProd"]; ?>">

                    <div class="lado1">
                        NOME DO PRODUTO: 
                        <p><input type="text" name="nomeProd" id="nomeProd" value="<?php echo $linha["nomeProd"]; ?>" placeholder="NOME"></p>
                        QUANTIDADE: 
                        <p><input type="number" name="quantidadeProd" id="quantidadeProd" value="<?php echo $linha["quantidadeProd"]; ?>" placeholder="QUANTIDADE"></p>
                    </div>
                    <div class="lado2">
                        VALOR UNITARIO: 
                        <p><input type="number" name="preco" id="preco" step="0.010" value="<?php echo $linha["preco"]; ?>" placeholder="VALOR UNITARIO"></p>
                        DESCRICAO: 
                        <p><input type="text" name="descricao" id="descricao" value="<?php echo $linha["descricao"]; ?>" placeholder="DESCRICAO"></p>
                    </div>
                    <div class="botoes">
                        <p><input type="submit" name="enviar" id="enviar" value="ENVIAR"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <p>
    <div class="itens">
        <a href="selectProduto.php"><img src="../../icones/box-arrow-left.svg" alt="" width="100" height="50"></a>
    </div>
</p>
</body>
</html>
