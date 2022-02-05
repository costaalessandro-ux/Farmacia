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
          
            $stmt=$conn->prepare("UPDATE produto SET nome = '$nome',
                     quantidade = $quantidade,
                     valor = $valor, 
                     descricao = '$descricao'
                     WHERE id = $id; ");
            $stmt->bindValue(":nome",$nome, PDO::PARAM_STR);
            $stmt->bindValue(":quantidade",$quantidade, PDO::PARAM_INT);
            $stmt->bindValue(":valor",$valor, PDO::PARAM_INT);
            $stmt->bindValue(":descricao",$descricao, PDO::PARAM_STR);
            $stmt->bindValue(":id",$id, PDO::PARAM_INT);
            $stmt->execute();
            echo "Alteração efetuada com sucesso";
        } catch (Exception $e) {
            echo "ERROO: " . $e->getMessage();
        }
        ?>
        <p>
            <a href="selectProduto.php">VOLTAR</a>
        </p>
    </body>
</html>
