<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <?php
         require_once '../../funcoes.php';
         require_once '../../conexao.php';
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
		  $quantidade = $row["quantidade"];
		  $valor = $row["valor"];
                  $descricao = $row["descricao"];
		  
		  echo "<tr>";
		  echo "<td> $id </td>";
		  echo "<td> $nome</td>";
		  echo "<td> $quantidade </td>";
		  echo "<td> $valor </td>";
                  echo "<td> $descricao </td>";
		  
		    
		  
		  echo '<td><a href="deleteProduto.php?id='. $row["id"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="formAlterProduto.php?id='. $row["id"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
  }
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
        ?>
        <br>
   	<p>
            <a href="formCadastroProdutos.php">VOLTAR</a>
        </p>
    </body>
</html>
