<!DOCTYPE html>
<?php
     include '../../../../conexao.php';
     include '../../../../funcoes.php';
     
     $id = $_GET["id"];
     $linha = le($conn, $id);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alteração de Cadastro</title>
    </head>
    <body>
        <form action="alterCadastro.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $linha["id"];?>">
            <input type="text" name="nome" id="nome" value="<?php echo $linha["nome"];?>" placeholder="NOME"><p>
            <input type="number" name="quant" id="quant" value="<?php echo $linha["quantidade"];?>" placeholder="QUANTIDADE"><p>
            <input type="number" name="valor" id="valor" value="<?php echo $linha["valor"];?>" placeholder="VALOR UNITARIO"><p>
            <input type="text" name="descricao" id="descricao" value="<?php echo $linha["descricao"];?>" placeholder="DESCRICAO">
            <p><input type="submit" name="ENVIAR" id="ENVIAR"></p>
        </form>
    </body>
</html>
