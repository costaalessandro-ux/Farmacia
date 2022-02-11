<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../estilo/estiloMenu.css" rel="stylesheet" type="text/css">
        <title>HOME Farmacia</title>
    </head>

    <header>
        <div class="data">
            <h4>
                <?php
                $data = date('d/m/Y');
                echo '<strong>' . $data . '</strong>';
                ?>
            </h4>
            <h4>
                <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo '<strong>' . date('H:i:s') . '</strong>';
                ?>
            </h4>
        </div>
        
        
        
    </header>
 
    <body>
        <div class="container">
             <div class="row align-items-end">
            <div class="col">
                <a href="../admin/cadastroProdutos/formCadastroProdutos.php"><img src="../icones/person.svg" alt="" width="300" height="200"></a>
            </div>
             <div class="col">
                <a  href="../cadastroVendas/formCadastroVenda.php"><img src="../icones/cart-plus.svg " alt="" width="300" height="200"> </a>
            </div>
            <div class="col">
                <a href="../index.php"><img src="../icones/box-arrow-left.svg" alt="" width="300" height="200"></a>
            </div>
             </div>
        </div>  
    </body>

    <footer>

    </footer>

</html>
