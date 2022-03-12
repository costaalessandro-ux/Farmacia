<?php

function le($con, $idProd) {
    $row = array();
    try {
        $query = "SELECT idProd, nomeProd, quantidadeProd,
	 preco, descricao FROM produto where idProd = :idProd;";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":idProd", $idProd, PDO::PARAM_INT);
        $stmt->execute();
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row;
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

// função para CRUD do cliente!!
function leVendas($con, $nome) {
    $row1 = array();
    try {
        $query = "SELECT nome,telefone,dataNasc, hora, codigo, quantidade, valorPago FROM vendas where nome = nome;";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->execute();
        if ($row1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row1;
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>