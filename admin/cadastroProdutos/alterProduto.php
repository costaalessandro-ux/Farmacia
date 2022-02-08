<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alteração de Cadastro</title>
    </head>
    <body>
        <?php
        require_once '../../conexao.php';
        //require_once '../../funcoes.php';

        $id = $_GET["id"];
        $nome = $_GET["nome"];
        $quantidade = $_GET["quantidade"];
        $valor = $_GET["valor"];
        $descricao = $_GET["descricao"];

        try {
            $query = "UPDATE produto set nome = :nome,
                     quantidade = :quantidade,
                     valor = :valor, 
                     descricao = :descricao
                     where id = :id;";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->bindParam(":quantidade", $quantidade, PDO::PARAM_INT);
            $stmt->bindParam(":valor", $valor, PDO::PARAM_INT);
            $stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            echo "Alteração efetuada com sucesso";
        } catch (PDOException $e) {
            echo "ERROO: " . $e->getMessage();
        }
        ?>
        <p>
            <a href="selectProduto.php">VOLTAR</a>
        </p>
    </body>
</html>
