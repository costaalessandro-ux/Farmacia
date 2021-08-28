<!DOCTYPE html>
<html>
    <head>
    <title>Cadastro de curso - Alteração</title>
    <meta charset="utf-8">
	</head>
	<body>       
        <?php
        
        require_once '../../../../conexao.php';
        require_once '../../../../funcoes.php';
        
        
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $quant = $_GET['quant'];
        $valor = $_GET['valor'];
        $descricao = $_GET['descricao'];
        
        try{
            $query = "UPDATE produto set nome = '$nome',
                     quantidade = $quant,
                     valor = $valor, 
                     descricao = '$descricao'
                     where id = $id;";
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindParam(":quantidade",$quant, PDO::PARAM_INT);
         $stmt->bindParam(":valor",$valor, PDO::PARAM_INT);
         $stmt->bindParam(":descricao",$descricao, PDO::PARAM_STR);
         $stmt->bindParam(":id",$id, PDO::PARAM_INT);
         $stmt->execute();
	  echo "Alteração efetuada com sucesso";                 
        } catch (Exception $e) {
            echo "ERROO: ".$e->getMessage();
        }
        ?>
            <p>
            <a href="selectCadastro.php">VOLTAR</a>
            </p>
       </body>
</html>   

