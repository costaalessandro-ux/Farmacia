<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Vendas</title>
    </head>
    <body>
    <center>
        <h1>CADASTRO DE VENDAS</h1>
        <div class="text-center">
            <div class="form-control">
                <form action="insertVendas.php" method="post">
                    <div class="mb-3">  
                        <p><input type="text" name="nome" id="nome" placeholder="NOME DO CLIENTE"></p>
                    </div>
                    <div class="mb-3"> 
                        <p><input type="text" name="telefone" id="telefone" placeholder="TELEFONE"></p>
                    </div>
                    <div class="mb-4"> 
                        <p> <label for="dataNasc">
                                <input type="date" name="dataNasc" id="dataNasc"> 
                            </label>
                        </p>
                        <div class="mb-4"> 
                        <p> <label for="hora">
                                <input type="time" name="hora" id="hora"> 
                            </label>
                        </p>
                    </div>
                    <div class="mb-3"> 
                        <p> <input type="number" name="codigo" id="codigo" placeholder="CODIGO DO PRODUTO"> </p>
                    </div>
                    <div class="mb-3"> 
                        <p><input type="number" id="quantidade" name="quantidade" placeholder="QUANTIDADE" required></p>
                    </div>
                    <div class="mb-3"> 
                        <p><input type="number" id="valorPago" name="valorPago" placeholder="VALOR PAGO" required></p>
                    </div>
                    <div class="mb-3"> 
                        <input type="submit" name="botao" id="botao" value="ENVIAR">
                        <input type="reset" name="botao1" id="botao1" value="REDEFINIR">
                    </div>
                </form>
            </div>
        </div>
        <p><a href="selectVendas.php">Consultar</a></p>
        <p><a href="../menu/menu.php">VOLTAR</a></p>
    </center>
</body>

</html>
