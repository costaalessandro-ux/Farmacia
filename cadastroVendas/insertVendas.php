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
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
        
        try {
            $query = "INSERT INTO vendas(nome,telefone,dataNasc, codigo, quantidade) values (:nome, :telefone, :dataNasc, :codigo, :quantidade);";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->bindParam(":telefone", $telefone, PDO::PARAM_STR);
            $stmt->bindParam(":dataNasc", $dataNasc, PDO::PARAM_STR);
            $stmt->bindParam(":codigo", $codigo, PDO::PARAM_INT);
            $stmt->bindParam(":quantidade", $quantidade, PDO::PARAM_INT);
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
