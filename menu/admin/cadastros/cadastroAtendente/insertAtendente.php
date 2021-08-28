<?php

require_once '../../../../conexao.php';
 $matricula = $_POST['matricula'];
 $nome = $_POST['nome'];
 $turno = $_POST['turno'];
 
     try{
         $query = "INSERT INTO atendente(matricula,nome,turno) values (:matricula, :nome, :turno);";
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":matricula",$matricula, PDO::PARAM_INT);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindParam(":turno",$turno, PDO::PARAM_STR);
         $stmt->execute();
         echo "Inclusão efetuada com Sucesso!";
         
     } catch (PDOException $ex) {
       echo "ERRO: ".$ex->getMessage();
     } 
 ?>
<html>
<p><a href="selectAtendente.php">VOLTAR</a></p>
</html>

