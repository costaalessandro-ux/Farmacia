<?php
try {
    $conn = new PDO('pgsql:host=ec2-44-195-191-252.compute-1.amazonaws.com;
  dbname=heroku-farmacia',"adlwwijslzhomn","0283346bb0370dfd1bb2ca2ed67d4f0fefefa6087418ed85ede0ca4793ad6f9a
");
    $conn->setAttribute(PDO::ATTR_ERRMODE,
   PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
   }
?>

