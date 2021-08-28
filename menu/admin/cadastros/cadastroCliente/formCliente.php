<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Cliente</title>
    </head>
    <body>
        <form action="insertCliente.php" method="post">
        <div><h1>Cadastro  de Claiente</h1></div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">
        <input type="submit" name="botao" id="botao" value="Enviar">
        <input type="reset" name="botao1" id="botao1" value="Redefinir">
        </form>
         <p><a href="selectCliente.php">VOLTAR</a></p>
        <?php
        // put your code here
        ?>
    </body>
</html>
