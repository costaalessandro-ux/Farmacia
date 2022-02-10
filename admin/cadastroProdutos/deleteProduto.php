<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../../conexao.php';
        require_once '../../funcoes.php';
        $id = $_GET["idProd"];

        try {
            $query = "delete from produto where idProd=:idProd;";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":idProd", $id, PDO::PARAM_INT);
            $stmt->execute();
            echo "Exclusão efetuada com sucesso";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        ?>
        <br>
   	<p>
            <a href="selectProduto.php">VOLTAR</a>
        </p>

    </body>
</html>
