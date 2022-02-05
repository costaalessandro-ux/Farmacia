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
 $id;
 $nome = $_POST['nome'];
 $quantidade = $_POST['quantidade'];
 $valor = $_POST['valor'];
 $descricao = $_POST['descricao'];
 
     try{
         $query = "INSERT INTO produto(nome,quantidade,valor,descricao) values (:nome, :quantidade, :valor, :descricao);";
         $stmt=$conn->prepare($query);
         $stmt->bindValue(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindValue(":quantidade",$quantidade, PDO::PARAM_INT);
         $stmt->bindValue(":valor",$valor, PDO::PARAM_INT);
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
