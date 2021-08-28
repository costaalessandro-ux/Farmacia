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
        require_once '../../../../funcoes.php';
        require_once '../../../../conexao.php';
  try{
  echo "<h1>Lista de Clientes Cadastrados</h1>";
  
  // lista cursos já cadastrados
  $query = "SELECT nome,telefone FROM cliente;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
	  echo "<table border='1'>";
	  echo "<tr>
			  <th>Nome</th>
			  <th>Telefone</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row1 = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $nome = $row1["nome"];
		  $telefone = $row1["telefone"];
		  
		  
		  echo "<tr>";
		  echo "<td> $nome</td>";
		  echo "<td> $telefone</td>";
		  
		  
		    
		  
		  echo '<td><a href="deleteCliente.php?nome='. $row1["nome"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="formAlterarCliente.php?nome='. $row1["nome"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
  }
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
        ?>
        <p>
            <a href="formCliente.php">CADASTRAR NOVO CLIENTE</a>
        </p>
        <p>
        <a href="../../../../menu.php">VOLTAR</a>
        </p>
    </body>
</html>
