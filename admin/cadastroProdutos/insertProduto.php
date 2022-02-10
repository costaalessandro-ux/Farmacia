<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../../conexao.php';
 $idProd;
 $nomeProd = $_POST['nomeProd'];
 $quantidadeProd = $_POST['quantidadeProd'];
 $preco = $_POST['preco'];
 $descricao = $_POST['descricao'];
 
     try{
         $query = "INSERT INTO produto(nomeProd,quantidadeProd,preco,descricao) values (:nomeProd, :quantidadeProd, :preco, :descricao);";
         $stmt=$conn->prepare($query);
         $stmt->bindValue(":nomeProd",$nomeProd, PDO::PARAM_STR);
         $stmt->bindValue(":quantidadeProd",$quantidadeProd, PDO::PARAM_INT);
         $stmt->bindValue(":preco",$preco, PDO::PARAM_INT);
         $stmt->bindValue(":descricao",$descricao, PDO::PARAM_STR);
         $stmt->execute();
         echo "Inclusão efetuada com Sucesso!";
         
     } catch (PDOException $ex) {
       echo "ERRO: ".$ex->getMessage();
     } 
        ?>
    </body>
    <p><a href="formCadastroProdutos.php">VOLTAR</a></p>
</html>
