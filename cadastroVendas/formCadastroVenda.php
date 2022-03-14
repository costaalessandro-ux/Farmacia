<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../estilo/estiloCadastroVenda.css" rel="stylesheet" type="text/css">
        <title>Cadastro de Vendas</title>
    </head>
    <body>
    <center>
        <h1>CADASTRO DE VENDAS</h1>
        <div class="container">
            <div class="text-center">
                <div class="mb-3">
                    <form action="insertVendas.php" method="post">
                        <div class="lado1">  
                            NOME DO CLIENTE: 
                            <p><input type="text" name="nome" id="nome"></p>
                            TELEFONE: 
                            <p><input type="text" name="telefone" id="telefone"></p>
                                DATA: 
                                <p><input type="date" name="dataNasc" id="dataNasc"></p> 
                                    HORA: 
                                    <p><input type="time" name="hora" id="hora"></p>
                        
                            CODIGO DO PRODUTO: 
                            <p><input type="number" name="codigo" id="codigo"></p>
                            QUANTIDADE:
                            <p><input type="number" id="quantidade" name="quantidade" required></p>
                            VALOR PAGO: 
                            <p><input type="number" id="valorPago" name="valorPago" required></p>
                        </div>
                        <div class="botoes"> 
                            <input type="submit" name="botao" id="botao" value="ENVIAR">
                            <input type="reset" name="botao1" id="botao1" value="REDEFINIR">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="itens">
            <a href="selectVendas.php"><img src="../icones/card-list.svg" alt="" width="100" height="50"></a>  <a href="../menu/menu.php"><img src="../icones/box-arrow-left.svg" alt="" width="100" height="50"></a>
        </div>
    </center>
</body>

</html>
