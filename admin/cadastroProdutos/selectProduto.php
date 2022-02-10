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
  
  $query = "SELECT idProd, nomeProd, quantidadeProd, preco, descricao FROM produto;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
	  echo "<table border='1'>";
	  echo "<tr>
	          <th>id</th>
			  <th>Nome do Produto</th>
			  <th>Quantidade</th>
			  <th>Preco</th>
                          <th>Descricao</th>
			  <th colspan=\"2\">Ações</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $idProd = $row["idProd"];
		  $nomeProd = $row["nomeProd"];
		  $quantidadeProd = $row["quantidadeProd"];
		  $preco = $row["preco"];
                  $descricao = $row["descricao"];
		  
		  echo "<tr>";
		  echo "<td> $idProd </td>";
		  echo "<td> $nomeProd</td>";
		  echo "<td> $quantidadeProd </td>";
		  echo "<td> $preco </td>";
                  echo "<td> $descricao </td>";
		  
		    
		  
		  echo '<td><a href="deleteProduto.php?idProd='. $row["idProd"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="formAlterProduto.php?idProd='. $row["idProd"] . '">Alterar</a></td>';
		  
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
