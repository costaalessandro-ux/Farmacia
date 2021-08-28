<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         
          require_once '../../../../funcoes.php';
          require_once '../../../../conexao.php';
  try{
  echo "<h1>Lista de Atendentes Cadastrados</h1>";
  
  // lista cursos já cadastrados
  $query = "SELECT matricula, nome, turno FROM atendente;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
	  echo "<table border='1'>";
	  echo "<tr>
			  <th>Matricula</th>
			  <th>Nome</th>
			  <th>Turno</th>
			  <th colspan=\"2\">Ações</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row2 = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $matricula = $row2["matricula"];
		  $nome = $row2["nome"];
		  $turno = $row2["turno"];
		  
		  echo "<tr>";
		  echo "<td> $matricula </td>";
		  echo "<td> $nome</td>";
		  echo "<td> $turno </td>";
		  
		  echo '<td><a href="deleteAtendente.php?matricula='. $row2["matricula"] . '">Excluir</a></td>';
		 
		  echo '<td><a href="formAlterarAtendente.php?matricula='. $row2["matricula"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
  }
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
        ?>
        <p>
        <a href="formAtendente.php">CADASTRAR NOVO ATENDENTE</a>
        </p>
        <p>
        <a href="../../../../menu.php">VOLTAR</a>
        </p>
    </body>
</html>
