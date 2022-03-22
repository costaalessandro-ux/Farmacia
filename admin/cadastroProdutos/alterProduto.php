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
        require_once '../../funcoes.php';

        
        $nomeProd = $_GET["nomeprod"];
        $quantidadeProd = $_GET["quantidadeprod"];
        $preco = $_GET["preco"];
        $descricao = $_GET["descricao"];
        $idProd = $_GET["idprod"];

        try {
            $query = "UPDATE produto set nomeprod = :nomeprod,
                     quantidadeprod = :quantidadeprod,
                     preco = :preco, 
                     descricao = :descricao
                     where idProd = :idProd;";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nomeprod", $nomeProd, PDO::PARAM_STR);
            $stmt->bindParam(":quantidadeprod", $quantidadeProd, PDO::PARAM_INT);
            $stmt->bindParam(":preco", $preco, PDO::PARAM_INT);
            $stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
            $stmt->bindParam(":idprod", $idProd, PDO::PARAM_INT);
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
