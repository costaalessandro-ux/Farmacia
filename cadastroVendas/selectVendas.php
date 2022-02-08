<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once '../funcoes.php';
         require_once '../conexao.php';
  try{
  echo "<h1>Lista de Produtos Cadastrados</h1>";
  
  $query = "select v.nome, v.telefone, v.dataNasc, v.quantidade, p.nome from vendas as v 
  join produto as p on p.id = v.codigo order by p.id;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
	  echo "<table border='1'>";
	  echo "<tr>
	          <th>id</th>
			  <th>Nome</th>
			  <th>Telefone</th>
			  <th>DataNascimento</th>
                          <th>Quantidade</th>
                          <th>Nome do Remedio</th>
			  <th colspan=\"2\">Ações</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row1 = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $nome = $row1["nome"];
		  $telefone = $row1["telefone"];
		  $dataNasc = $row1["dataNasc"];
                  $quantidade = $row1["quantidade"];
		  //$nomeRem = $row1[""];
                  
		  echo "<tr>";
		  echo "<td> $nome</td>";
		  echo "<td> $telefone </td>";
		  echo "<td> $dataNasc </td>";
                  echo "<td> $quantidade </td>";
		  
		    
		  
		  echo '<td><a href="deleteProduto.php?nome='. $row1["nome"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="formAlterProduto.php?nome='. $row1["nome"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
  }
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
        ?>
    </body>
</html>
