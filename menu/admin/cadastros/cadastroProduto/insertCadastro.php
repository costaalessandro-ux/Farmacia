<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 require_once '../../../../conexao.php';
 $id;
 $nome = $_POST['nome'];
 $quant = $_POST['quant'];
 $valor = $_POST['valor'];
 $descricao = $_POST['descricao'];
 
     try{
         $query = "INSERT INTO produto(nome,quantidade,valor,descricao) values (:nome, :quantidade, :valor, :descricao);";
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindParam(":quantidade",$quant, PDO::PARAM_INT);
         $stmt->bindParam(":valor",$valor, PDO::PARAM_INT);
         $stmt->bindParam(":descricao",$descricao, PDO::PARAM_STR);
         $stmt->execute();
         echo "Inclusão efetuada com Sucesso!";
         
     } catch (PDOException $ex) {
       echo "ERRO: ".$ex->getMessage();
     } 
 ?>
         <p><a href="selectCadastro.php">VOLTAR</a></p>
    </body>
</html>
