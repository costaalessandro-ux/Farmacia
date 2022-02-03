<!DOCTYPE html>
<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Cliente</title>
    </head>
    <body>
        <form action="insertVendas.php" method="post">
        <div><h1>Cadastro de Cliente</h1></div>
        <label for="nome">Nome do Cliente:</label>
        <input type="text" name="nome" id="nome">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">
        <label for="dataNasc">Data de Nascimento:</label>
        <input type="date" name="dataNasc" id="dataNasc"> 
        <label for="codigo">Codigo</label> <!-- este dado pode ser chamado de ID -->
        <input type="number" id="codigo" name="codigo" required>
        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade" required>
        <input type="submit" name="botao" id="botao" value="Enviar">
        <input type="reset" name="botao1" id="botao1" value="Redefinir">
        </form>
        <p><a href="../menu/menu.php">Consultar</a></p>
        <p><a href="../menu/menu.php">VOLTAR</a></p>
    </body>
</html>
