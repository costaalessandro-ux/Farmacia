<?php

function le($con, $idProd) {
    $row = array();
    try {
        $query = "SELECT idprod, nomeprod, quantidadeprod,
	 preco, descricao FROM produto where idprod = :idprod;";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":idprod", $idProd, PDO::PARAM_INT);
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
        $query = "SELECT nome,telefone,datanasc, hora, codigo, quantidade, valorpago FROM vendas where nome = nome;";
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