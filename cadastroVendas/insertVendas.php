<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../conexao.php';

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $dataNasc = $_POST['dataNasc'];
        try {
            $query = "INSERT INTO vendas(nome,telefone,dataNasc) values (:nome, :telefone, :dataNasc);";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->bindParam(":telefone", $telefone, PDO::PARAM_STR);
            $stmt->bindParam(":dataNasc", $dataNasc, PDO::PARAM_STR);
            $stmt->execute();
            echo "Inclusão efetuada com Sucesso!";
        } catch (PDOException $ex) {
            echo "ERRO: " . $ex->getMessage();
        }
        echo ""
       
        ?>
         <br>
         <a href="formCadastroVenda.php">VOLTAR</a>;
    </body>
</html>
