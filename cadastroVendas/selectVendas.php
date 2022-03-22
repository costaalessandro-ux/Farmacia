<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../estilo/estiloSelectVendas.css" rel="stylesheet" type="text/css">
        <title>Vendas Realizadas</title>
    </head>
    <body>
        <div class="titulo">
        <h1>VENDAS REALIZADAS</h1>
        </div>
        <?php
        require_once '../funcoes.php';
        require_once '../conexao.php';
        try {
            $query = "select v.nome, v.telefone, v.datanasc, v.quantidade, p.idprod, p.nomeprod, v.hora, v.valorpago, (v.quantidade * p.preco) as Valor_Total, (v.valorpago - (v.quantidade * p.preco)) as troco
            from vendas as v inner join produto as p on v.codigo = p.idprod;";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if ($result = $query) {
              
                echo "<table class='table table-borderless'>";
                echo "<tr>
			  <th scope='col'> Nome do Cliente </th>
			  <p><th> Telefone </th></p>
                          <th> Data da Compra </th>
                          <th> Hora da Compra </th>
                          <th> Nome do Remedio </th>
                          <th> Quantidade </th>
                          <th> Valor Total </th>
                          <th> Valor Pago </th>
                          <th> Troco </th>
			  <th colspan=\"2\"> Ações </th>
			</tr>";

                while ($row1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $nome = $row1["nome"];
                    $telefone = $row1["telefone"];
                    $dataNasc = $row1["datanasc"];
                    $hora = $row1["hora"];
                    $nomeRem = $row1["nomeprod"];
                    $quantidade = $row1["quantidade"];
                    $valorTot = $row1["Valor_Total"];
                    $valorPago = $row1["valorpago"];
                    $valorTroco = $row1["troco"];

                    echo "<tr>";
                    echo "<td> $nome</td>";
                    echo "<td> $telefone </td>";
                    echo "<td> $dataNasc </td>";
                    echo "<td> $hora </td>";
                    echo "<td> $nomeRem </td>";
                    echo "<td> $quantidade </td>";
                    echo "<td> $valorTot </td>";
                    echo "<td> $valorPago </td>";
                    echo "<td> $valorTroco </td>";
                    echo '<td><a href="deleteVendas.php?nome=' . $row1["nome"] . '">Excluir</a></td>';
                    echo '<td><a href="formAlterVendas.php?nome=' . $row1["nome"] . '">Alterar</a></td>';
                    echo "</tr>";
                }
            }
            echo "</table>";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        ?>
        <div class="icone">
        <p>
            <a href="formCadastroVenda.php"><img src="../icones/box-arrow-left.svg" alt="" width="100" height="50"></a>
        </p>
        </div>
    </body>
</html>
