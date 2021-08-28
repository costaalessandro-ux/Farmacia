<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <?php
          require_once '../../../../funcoes.php';
          require_once '../../../../conexao.php';
  try{
  echo "<h1>Lista de Produtos Cadastrados</h1>";
  
  // lista cursos já cadastrados
  $query = "SELECT id, nome, quantidade, valor, descricao FROM produto;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
	  echo "<table border='1'>";
	  echo "<tr>
	          <th>id</th>
			  <th>Nome</th>
			  <th>Quantidade</th>
			  <th>Valor</th>
                          <th>Descricao</th>
			  <th colspan=\"2\">Ações</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $id = $row["id"];
		  $nome = $row["nome"];
		  $quant = $row["quantidade"];
		  $valor = $row["valor"];
                  $descricao = $row["descricao"];
		  
		  echo "<tr>";
		  echo "<td> $id </td>";
		  echo "<td> $nome</td>";
		  echo "<td> $quant </td>";
		  echo "<td> $valor </td>";
                  echo "<td> $descricao </td>";
		  
		    
		  
		  echo '<td><a href="deleteCadastro.php?id='. $row["id"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="formAlterarCadastro.php?id='. $row["id"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
  }
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
?>  
	<p>
        <a href="formCadastro.php">CADASTRAR NOVO PRODUTO</a>
        </p>
        <p>
        <a href="../../../../menu.php">VOLTAR</a>
        </p>
        </center>
    </body>
</html>
