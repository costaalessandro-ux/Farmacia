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
        $hora = $_POST['hora'];
        $codigo = $_POST['codigo'];
        $quantidade = $_POST['quantidade'];
        $valorPago = $_POST['valorPago'];
        
        try {
            $query = "INSERT INTO vendas(nome,telefone,dataNasc, hora, codigo, quantidade, valorPago) values (:nome, :telefone, :dataNasc, :hora, :codigo, :quantidade, :valorPago);";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->bindParam(":telefone", $telefone, PDO::PARAM_STR);
            $stmt->bindParam(":dataNasc", $dataNasc, PDO::PARAM_STR);
            $stmt->bindParam(":hora", $hora, PDO::PARAM_STR);
            $stmt->bindParam(":codigo", $codigo, PDO::PARAM_INT);
            $stmt->bindParam(":quantidade", $quantidade, PDO::PARAM_INT);
            $stmt->bindParam(":valorPago", $valorPago, PDO::PARAM_INT);
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
