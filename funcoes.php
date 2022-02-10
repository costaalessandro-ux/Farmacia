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

function leNotaFiscal($con, $matricula) {
    $row3 = array();
    try {
        $query = "SELECT codigo, quantidade, produto, valor FROM notafiscal where codigo = :codigo;";
        $stmt = $con->prepare($query);
        $stmt->bindParam(":codigo", $codigo, PDO::PARAM_INT);
        $stmt->execute();
        if ($row3 = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row3;
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}

/* function monta_select($con, $idselecionado=0){

  // lista cursos jรก cadastrados
  try{
  $query = "SELECT id, nome FROM farmacia ORDER BY nome";
  $stmt= $con->prepare($query);
  $stmt->execute();
  echo "select name=\"id\">";
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $id = $row["id"];
  $nome = $row["nome"];
  $selected = "";
  if ($id == $idselecionado) {
  $selected = "selected";
  }echo "<option value=\"$id\" $selected>" . $nome . '</option>';
  } echo "/select";
  }catch (PDOException $e){
  echo "Erro: ".$e->getMessage();
  }
  } */
?>