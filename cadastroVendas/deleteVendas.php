<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once '../conexao.php';
        require_once '../funcoes.php';
        $nome = $_GET["nome"];

        try {
            $query = "delete from vendas where nome = :nome;";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->execute();
            echo "Exclusão efetuada com sucesso";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        ?>
        <br>
   	<p>
            <a href="selectVendas.php">VOLTAR</a>
        </p>
    </body>
</html>
