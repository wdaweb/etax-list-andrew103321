<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a{
            text-decoration:none;
            border: 1px solid black;
            border-radius:5%;
        }
        a:active{
            color:red;
        }
        body{
            background: linear-gradient(to right, #00416a, #e4e5e6); 
        }
        #tb1{
            margin:auto;  
            background: #CCEEFF;   
            font-size:30px; 
        }
        #tb2{
        
            position: relative;
            left:90px;
        }
        table{
          
        }
        #div1{
            margin:auto;
            background:#CCEEFF;
            width:568px;
        }
        #div2{
            text-align:center;
        }
  
        
        </style>
   
</head>
<body>
    
<div>
    <table id='tb1' >
       <td><a href="prizeData.php?id=1">1-2月</a></td>
       <td><a href="prizeData.php?id=2">3-4月</a></td>
       <td><a href="prizeData.php?id=3">5-6月</a></td>
       <td><a href="prizeData.php?id=4">7-8月</a></td>
       <td><a href="prizeData.php?id=5">9-10月</a></td>
       <td><a href="prizeData.php?id=6">11-12月</a></td>
       <td><a href="./index.php">首頁</a></td>
    </table>
</div>


<?php
if(!empty( $_GET['id'])){
  $period = $_GET['id'];

  $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
  $pdo = new pdo($dsn,'root','');
  
  // 獎號資料庫
  $sql = "SELECT * FROM `prize` WHERE `period` ='$period'";

  //   echo $sql; 
  $row= $pdo->query($sql)->fetchAll();

   //   print_r($row);
    ?>
    <div id='div1'>
   <?php
    foreach ($row as $user){
    ?>   
    <table border="1" id='tb2'>
        <tr>
          <td colspan=2><?=$user['year']?>年</td>
        </tr>
        <tr>
          <td colspan=2>期別<?=$user['period']?></td>
        </tr>
        <tr>
          <td>特別獎<?=$user['prize_1']?></td>
          <td>1000萬</td>
        </tr>
        <tr>
            <td>特獎<?=$user['prize_2']?></td>
            <td>200萬</td>
        </tr>
        <tr>
          
            <td>頭獎<br>
                <?=$user['prize_3']?><br>
                <?=$user['prize_4']?><br>
                <?=$user['prize_5']?><br>
            </td>
           <td>20萬</td>
        </tr>
        <tr>
            <td>二獎  頭獎中獎號碼末7 位相同者各得獎金</td>
            <td>4萬元</td>
        </tr>
        <tr>
            <td>三獎  頭獎中獎號碼末6 位相同者各得獎金</td>
            <td>1萬元</td>
        </tr>
        <tr>
            <td>四獎  頭獎中獎號碼末5 位相同者各得獎金</td>
            <td>4千元</td>
        </tr>
        <tr>
            <td>五獎  頭獎中獎號碼末4 位相同者各得獎金</td>
            <td>1千元</td>
        </tr>
        <tr>
            <td>
            <?=$user['prize_6']?> <br>
            <?=$user['prize_7']?> <br>
            六獎   頭獎中獎與六獎號碼末3 位相同者各得獎金</td>
            <td>2百元</td>
        </tr>
        <tr>
            <td colspan=2 style="font-size:30px; text-align:center;  "><a href="./prizeData.php?id=<?=$period?>&s=1" onclick="money(this)">兌獎</a></td>
           
        </tr>
    </table>
   
    <?php   
    }       
    }
    ?>
    <div id='div2'>
    <?php

        if(!empty($user) && !empty($_GET['s'])){
            $com1= [$user['prize_1'],$user['prize_2'],$user['prize_3'],$user['prize_4']
            ,$user['prize_5'],$user['prize_6'],$user['prize_7']];
        }else{
            exit;
        }

        //發票資料庫
        $sql = "SELECT  `number`
        from `user`,`day` where `day`.`id`=`user`.`period` && `user`.`period` ='4' ";
        // echo $sql_1;
        $row_1= $pdo->query($sql)->fetchAll();
        // print_r($row_1) ;
        
            
      
         foreach ($row_1 as $user_1){ 
            
    
            if(substr($user_1['number'],2,8)==substr($com1[0],0,8)){
                echo "1000萬".'--';
                echo $user_1['number'];
                    echo "<br>";
            
            }else if(substr($user_1['number'],2,8)==substr($com1[1],0,8)){
                    echo "200萬".'--';
                    echo $user_1['number'];
                    echo "<br>";
            }else if(substr($user_1['number'],2,8)==substr($com1[2],0,8)||substr($user_1['number'],2,8)==substr($com1[3],0,8)||substr($user_1['number'],2,8)==substr($com1[4],0,8)){
                    echo "20萬".'--';
                    echo $user_1['number'];
                    echo "<br>";
            
            }else if(substr($user_1['number'],3,7)==substr($com1[2],1,7) ||substr($user_1['number'],3,7)==substr($com1[3],1,7)||substr($user_1['number'],3,7)==substr($com1[4],1,7)){
              
                echo "4萬".'--';
                echo $user_1['number'];
                echo "<br>";
             
                
            }else if(substr($user_1['number'],4,6)==substr($com1[2],2,6)||substr($user_1['number'],4,6)==substr($com1[3],2,6)||substr($user_1['number'],4,6)==substr($com1[4],2,6)){
                
                echo "1萬".'--';
                echo $user_1['number'];
                 echo "<br>";
            
            }else if(substr($user_1['number'],5,5)==substr($com1[2],3,5)||substr($user_1['number'],5,5)==substr($com1[3],3,5)||substr($user_1['number'],5,5)==substr($com1[4],3,5)){
              
                echo "4千".'--';
                echo $user_1['number'];
                echo "<br>";
              
            }else if(substr($user_1['number'],6,4)==substr($com1[2],4,4)||substr($user_1['number'],6,4)==substr($com1[3],4,4)||substr($user_1['number'],6,4)==substr($com1[4],4,4)){
                
                echo "1千".'--'; 
                echo $user_1['number'];
                echo "<br>"  ; 
            
            }else if(substr($user_1['number'],7,3)==substr($com1[2],5,3)||substr($user_1['number'],7,3)==substr($com1[3],5,3)||substr($user_1['number'],7,3)==substr($com1[4],5,3)){
            
                echo "200元".'--';    
                echo $user_1['number'];
                echo "<br>";
            
            }else if (substr($user_1['number'],7,3)==$com1[5]){
                
                echo "200元".'--';
                echo $user_1['number'];
                echo "<br>";
              
            }else if (substr($user_1['number'],7,3)==$com1[6]){
                
                echo "200元";
                echo $user_1['number'];
                echo "<br>";
            }
                  
    
    }
    
    ?> 
    </div>
    </div>  
    <script>
        function money()
    
    
    
    </script>
</body>
</html>
</body>
</html>