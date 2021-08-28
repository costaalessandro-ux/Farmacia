<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
      <?php
     include '../../../../conexao.php';
     include '../../../../funcoes.php';
     
     $nome = $_GET["nome"];
     $linha = leCliente($conn, $nome);
        ?>
    <body>
        <form action="alterCliente.php" method="get">
            <input type="text" name="nome" id="nome" value="<?php echo $linha["nome"];?>" placeholder="NOME"><p>
            <input type="text" name="telefone" id="telefone" value="<?php echo $linha["telefone"];?>" placeholder="TELEFONE"><p>
            <p><input type="submit" name="ENVIAR" id="ENVIAR"></p>
        </form>
    </body>
</html>
