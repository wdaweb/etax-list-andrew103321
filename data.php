<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        body{
            background: linear-gradient(to right, #00416a, #e4e5e6); 
        }
        a{
            text-decoration:none;
            border: 1px solid black;
            border-radius:5%;
        }
        a:active{
            color:red;
        }
        #div1{
            margin:auto;
            width:554px;
            background: #CCEEFF; 
        }
        #tb1{
            margin:auto;  
            background: #CCEEFF;   
            font-size:30px; 
        }
        #tb2{
            font-size:30px;
            position: relative;
            left:80px;
        }
        #span{
            margin:auto;
            font-size:30px;
            position: relative;
            left:880px;
            top:150px;
        }
      
    
    </style>
</head>
<body>
   
       <table id='tb1' >
           <tr>
                <td><a href="./data.php?id=1">1-2月</a></td>
                <td><a href="./data.php?id=2">3-4月</a></td>
                <td><a href="./data.php?id=3">5-6月</a></td>
                <td><a href="./data.php?id=4">7-8月</a></td>
                <td><a href="./data.php?id=5">9-10月</a></td>
                <td><a href="./data.php?id=6">11-12月</a></td>
                <td><a href="./index.php">首頁</a></td>
            </tr>
        </table>

<?php

        if(!empty($_GET["id"])){
            $period = $_GET["id"];
           
        }else{
            echo "<span id='span'>"."請選擇月份"."</span>";
            exit();
        }
?>  

    <?php
        $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
        $pdo = new pdo($dsn,'root','');

        $sql = "SELECT * from `user` 
        where `period` ='$period' ";
        
        //  echo $sql;
        $row= $pdo->query($sql)->fetchAll();
    ?>
    <div id='div1'>
    <table border="1" cellpadding = "0" cellspacing = "0" id='tb2' >
    
        <tr>
            <td>發票號碼</td>
            <td>花費金額</td>
            <td></td>
            <td></td>
            
        </tr>
    <?php 
    foreach($row as $user){
    ?>
        <tr>
            <td><?=$user['number']?></td>
            <td><?=$user['money']?></td>
            <td><a href="del_user.php?id=<?=$user['id']?>&period=<?=$period?>">刪除</a></td>
            <td><a href="eadit_user.php?id=<?=$user['id']?>&period=<?=$period?>">修改</a></td>
        </tr>
    <?php
    }
    ?>
    </table>
    </div>
</body>
</html>