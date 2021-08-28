<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>RESUMO DO DIA</title>
    </head>
    <body>
    <center><h1> RESUMO DO DIA </h1></center>
    É necessario criar uma logica para retornar todos as compra realizar em um certo periodo!
        <?php
        // put your code hererequire_once '../../../../funcoes.php';
          require_once '../conexao.php';
  try{
  echo "<h1>Lista de Compra Realizadas</h1>";
  
  // lista cursos já cadastrados
  $query = "SELECT codigo, quantidade, produto, valor FROM notafiscal;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
	  echo "<table border='1'>";
	  echo "<tr>
			  <th>Codigo</th>
			  <th>Quantidade</th>
			  <th>Produto</th>
                          <th>Valor</th>
			  <th colspan=\"2\">Ações</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row3 = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $codigo = $row3["codigo"];
		  $quantidade= $row3["quantidade"];
                  $produto= $row3["produto"];
		  $valor= $row3["valor"];
		  
		  echo "<tr>";
		  echo "<td> $codigo </td>";
		  echo "<td> $quantidade</td>";
		  echo "<td> $produto</td>";
                  echo "<td> $valor </td>";
		  
		  echo '<td><a href="deletenotafiscal.php?codigo='. $row3["codigo"] . '">Excluir</a></td>';
		 
		 /* echo '<td><a href="formAlterarAtendente.php?matricula='. $row2["matricula"] . '">Alterar</a></td>';*/
		  
		  echo "</tr>"; 
	  }
  }
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
        ?>
        <p>
        <a href="../menu.php">VOLTA</a>
        </p>
    </body>
</html>
