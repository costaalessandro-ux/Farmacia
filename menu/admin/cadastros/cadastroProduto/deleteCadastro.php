<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
  require_once '../../../../conexao.php';
  require_once '../../../../funcoes.php';
  $id = $_GET["id"];
  
  try{
  $query = "delete from produto where id=:id;";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":id",$id, PDO::PARAM_INT);
  $stmt->execute();
	echo "Exclusão efetuada com sucesso";
  }catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
 ?>  
 <br>
   	<p>
            <a href="selectCadastro.php">VOLTAR</a>
        </p>

    </body>
</html>
