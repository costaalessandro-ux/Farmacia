<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../../estilo/estiloSelectProduto.css" rel="stylesheet" type="text/css">
        <title>Produtos Cadastros</title>
    </head>
    <body>
         <div class="titulo">
        <h1>PRODUTOS CADASTRADOS</h1>
        </div>
        <?php
         require_once '../../funcoes.php';
         require_once '../../conexao.php';
  try{
  
  $query = "SELECT idprod, nomeprod, quantidadeprod, preco, descricao FROM produto;";
  $stmt = $conn->prepare($query);

   $stmt->execute();
   
  if ($result = $query) {
      
          echo "<table class='table table-borderless'>";
          echo "<div class='tabela'>";
	  echo "<tr>
                <th>id</th>
	        <th>Nome</th>
	        <th>Quantidade</th>
	        <th>Preco</th>
                <th>Descricao</th>
	        <th colspan=\"2\">Ações</th>
	        </tr>";
          
	  // busca os dados lidos do banco de dados
	  while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		  $idProd = $row["idprod"];
		  $nomeProd = $row["nomeprod"];
		  $quantidadeProd = $row["quantidadeprod"];
		  $preco = $row["preco"];
                  $descricao = $row["descricao"];
                  
		  echo "<tr>";
		  echo "<td>$idProd</td>";
		  echo "<td>$nomeProd</td>";
		  echo "<td>$quantidadeProd</td>";
		  echo "<td>$preco</td>";
                  echo "<td>$descricao</td>";	  
		  echo '<td><a href="deleteProduto.php?idprod='. $row["idprod"] . '"><img src="../../icones/file-excel.svg" alt="" width="15" height="30"></a></td>';
		  echo '<td><a href="formAlterProduto.php?idprod='. $row["idprod"] . '">Alterar</a></td>';
                  echo '<td><a href="javascript:confirmaAlteracao($row["idprod"])">Alterar</a></td>';
		  echo "</tr>";
                  
                  
	  }
  }       
          echo '</div>';
	  echo "</table>";
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage();
	}
        ?>
        <div class="icone">
            <a href="formCadastroProdutos.php"><img src="../../icones/box-arrow-left.svg" alt="" width="100" height="50"></a>
        </div>
    <script src="confirmacao.js"></script>
    </body>
</html>
