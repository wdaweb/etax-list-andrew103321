<?php
 $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
 $pdo = new pdo($dsn,'root','');

 $id = $_GET['id'];
 $period  = $_GET['period'];
 $sql = "DELETE From user where id='$id' ";
 echo $sql;

 $pdo->exec($sql);
 header("location:data.php?id=$period");


 
?>