<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php
        require_once '../../../../conexao.php';
        require_once '../../../../funcoes.php';
        
        $matricula = $_GET["codigo"];
        
        try{
            $query = "delete from notafiscal where codigo=:codigo;";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":codigo",$codigo, PDO::PARAM_INT);
            $stmt->execute();
            echo "Exclusão efetuada com sucesso";
        }catch (PDOException $e){
	    echo "Erro: ".$e->getMessage();
	}
    ?>
    <body>
        <br>
   	<p>
            <a href="insertAtendente.php">VOLTAR</a>
        </p>
    </body>
</html>
