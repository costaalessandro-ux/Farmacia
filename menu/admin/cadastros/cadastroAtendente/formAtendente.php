<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <header>
        <center><h1> CADASTRO DE ATENDENTES </h1></center>
       </header>
        <?php
        // put your code here
        ?>
        <center>
        <form action="insertAtendente.php" method="post">
            <input type="text" name="matricula" id="matricula" placeholder="MATRICULA"><p>
            <input type="text" name="nome" id="nome" placeholder="NOME"><p>
            <input type="text" name="turno" id="turno" placeholder="TURNO"><p>
            <input type="submit" name="ENVIAR" id="ENVIAR"> <input type="reset" name="reset" id="REDEFINIR">
            <p><a href="selectAtendente.php">VOLTAR</a></p>
        </form>
        </center>
    </body>
</html>
