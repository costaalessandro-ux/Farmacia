<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../../estilo/estiloCadastroProdutos.css" rel="stylesheet" type="text/css">
        <title>Cadastro de Produtos</title>
    </head>

    <header>
        <h1> CADASTRO DE PRODUTOS </h1>
    </header>

    <body>


        <div class="container">
            <div class="text-center">
                <div class="mb-3">
                    <form action="admin/cadastroProdutos/insertProduto.php" method="post">
                        <div class="lado1">
                            NOME DO PRODUTO: <input type="text" name="nomeProd" id="nomeProd" required>   QUANTIDADE: <input type="number" name="quantidadeProd" id="quantidadeProd">
                        </div>
                        <div class="lado2">
                            VALOR UNITARIO: <input type="number" name="preco" id="preco" step="0.010" required>  DESCRIÇÃO DO PRODUTO: <input type="text" name="descricao" id="descricao" required>
                        </div>
                        <div class="botoes">
                            <input type="submit" name="enviar" id="enviar" value="ENVIAR"> <input type="reset" name="reset" id="reset" value="REDEFINIR">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="itens">
            <a href="selectProduto.php"><img src="../../icones/card-list.svg" alt="" width="100" height="50"></a>   <a href="../../menu/menu.php"><img src="../../icones/box-arrow-left.svg" alt="" width="100" height="50"></a>
        </div>
    </body>
</html>
