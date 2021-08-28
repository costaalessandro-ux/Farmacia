<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../../../../conexao.php';
        require_once '../../../../funcoes.php';
        
        
        $matricula = $_GET['matricula'];
        $nome = $_GET['nome'];
        $turno = $_GET['turno'];
        
        try{
            $query = "UPDATE atendente set nome = '$nome',
                     turno = '$turno'
                     where matricula = $matricula;";
            
         $stmt=$conn->prepare($query);
         $stmt->bindParam(":nome",$nome, PDO::PARAM_STR);
         $stmt->bindParam(":turno",$turno, PDO::PARAM_STR);
         $stmt->bindParam(":matricula",$matricula, PDO::PARAM_INT);
         $stmt->execute();
         
          echo "Alteração efetuada com sucesso";                 
        } catch (Exception $e) {
            echo "ERROO: ".$e->getMessage();
        }
        ?>
         <p>
             <a href="selectAtendente.php">VOLTAR</a>
         </p>
    </body>
</html>
