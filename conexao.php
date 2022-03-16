<?php
try {
    $conn = new PDO('mysql:host=localhost;
  dbname=id18604861_farmacia',"id18604861_root","");
    $conn->setAttribute(PDO::ATTR_ERRMODE,
   PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
   }
?>

