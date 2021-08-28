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
        require_once '../../../../conexao.php';

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        
        try{
         $query = "INSERT INTO cliente(nome,telefone) values (:nome, :telefone);";
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindParam(":telefone",$telefone, PDO::PARAM_STR);
         $stmt->execute();
         echo "Inclusão efetuada com Sucesso!";
         
     } catch (PDOException $ex) {
       echo "ERRO: ".$ex->getMessage();
     } 
        ?>
        <p><a href="selectCliente.php">VOLTAR</a></p>
    </body>
</html>
