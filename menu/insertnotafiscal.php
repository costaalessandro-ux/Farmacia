<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../conexao.php';
        
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        
        try{
         $query = "INSERT INTO notafiscal(codigo,quantidade, produto, valor) values (:codigo,:quantidade, :produto, :valor);";
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":codigo",$codigo, PDO::PARAM_INT);
         $stmt->bindParam(":quantidade",$quantidade, PDO::PARAM_INT);
         $stmt->bindParam(":produto",$produto, PDO::PARAM_STR);
         $stmt->bindParam(":valor",$valor, PDO::PARAM_INT);
         $stmt->execute();
         echo "Inclusão efetuada com Sucesso!";

        } catch (Exception $ex) {
            echo "ERRO: ".$ex->getMessage();
        }
        ?>
        <html>
    <p><a href="resumodia.php">VOLTAR</a></p>
    </body>
</html>
