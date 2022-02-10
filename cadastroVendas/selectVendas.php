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
        try {
            echo "<h1>Lista de Vendas Cadastradas</h1>";

            $query = "select v.nome, v.telefone, v.dataNasc, v.quantidade, p.idProd, p.nomeProd, v.hora, v.valorPago, (v.quantidade * p.preco) as Valor_Total, (v.valorPago - (v.quantidade * p.preco)) as troco
            from vendas as v inner join produto as p on v.codigo = p.idProd;";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if ($result = $query) {
                echo "<table border='1'>";
                echo "<tr>
			  <th> Nome do Cliente </th>
			  <th> Telefone </th>
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
                    $dataNasc = $row1["dataNasc"];
                    $hora = $row1["hora"];
                    $nomeRem = $row1["nomeProd"];
                    $quantidade = $row1["quantidade"];
                    $valorTot = $row1["Valor_Total"];
                    $valorPago = $row1["valorPago"];
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
        <p>
            <a href="formCadastroVenda.php">VOLTAR</a>
        </p>
    </body>
</html>
