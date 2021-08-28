<!DOCTYPE html>
   <?php
        require_once '../../../../conexao.php';
        require_once '../../../../funcoes.php';
        
        $matricula = $_GET['matricula'];
        $linha = leAtendente($conn, $matricula);
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <form action="alterAtendente.php" method="GET">
            <input type="hidden" name="matricula" value="<?php echo $linha["matricula"];?>">
            <input type="text" name="nome" id="nome" value="<?php echo $linha["nome"];?>" placeholder="NOME"><p>
            <input type="text" name="turno" id="turno" value="<?php echo $linha["turno"];?>" placeholder="TURNO"><p>
            <p><input type="submit" name="ENVIAR" id="ENVIAR"></p>
        </form>
        <p>
            <a href="selectAtendente.php">VOLTAR</a>
        </p>
    </body>
</html>
