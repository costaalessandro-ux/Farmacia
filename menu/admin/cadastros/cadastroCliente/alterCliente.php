<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       require_once '../../../../conexao.php';
        require_once '../../../../funcoes.php';
        
        
        $nome = $_GET['nome'];
        $telefone = $_GET['telefone'];
        
        
        try{
            $query = "UPDATE cliente set nome = '$nome',
                     telefone = '$telefone'
                     where nome = '$nome';";
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindParam(":quantidade",$telefone, PDO::PARAM_STR);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->execute();
	  echo "Alteração efetuada com sucesso";                 
        } catch (Exception $e) {
            echo "ERROO: ".$e->getMessage();
        }
        ?>
    </body>
</html>
