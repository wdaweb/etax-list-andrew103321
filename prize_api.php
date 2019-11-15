<?php
        
         

         

         $period = $_POST['period'];
         $year = $_POST['year'];
         $prize_1 = $_POST['prize_1'];
         $prize_2 = $_POST['prize_2'];
         $prize_3 = $_POST['prize_3'];  
         $prize_4 = $_POST['prize_4'];
         $prize_5 = $_POST['prize_5'];
         $prize_6 = $_POST['prize_6'];
         $prize_7 = $_POST['prize_7'];

        $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
        $pdo = new pdo($dsn,'root','');


        // 防止重複輸入
        $sql = "SELECT `period`,`year` FROM `prize` WHERE 1";
      
        // echo $sql; 
      
        $row= $pdo->query($sql)->fetchAll();
         
         print_r($row);
    
        
        

        $sql = "INSERT INTO `prize`(`period`, `year`, `prize_1`, `prize_2`, `prize_3`, `prize_4`, `prize_5`, `prize_6`, `prize_7`) 
        VALUES ( '$period','$year','$prize_1', '$prize_2', '$prize_3', '$prize_4', '$prize_5', '$prize_6','$prize_7')";
        
        echo $sql;
        $pdo->exec($sql);

        header("location:index.php");
        
        
      
        
            
   
   
    
    ?>