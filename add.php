<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
          margin: 0;
          padding: 0;
          box-sizing: border-box;  
          background: linear-gradient(to right, #00416a, #e4e5e6); 
        
        }
        #tb1{
            text-align:center;
            margin:auto;  
            width:500px;
            background:#CCEEFF;
            position: relative;
            top:150px;
            box-shadow: 1px 1px 10px 5px black;
        } 
        table{
            font-size:30px;
            position: relative;
            left:140px;
        } 

    </style>

</head>
<body>
    <?php
        $str = $_POST['str'];
      
        $number = $_POST['number'];
    
        $number1 = $str.$number;
    
        $money = $_POST['money'];
    
        $period = $_POST['period'];
    
        $year = $_POST['year'];

   
        $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
        $pdo = new pdo($dsn,'root','');

        $sql = "INSERT INTO `user`( `number`, `money`, `period`, `year`) 
        VALUES ('$number1','$money','$period','$year')";
        
        // echo "sql".$sql;
        $pdo->query($sql);
        ?>
        <div id='tb1'>
          <table border="1">
            <tr>
                <td>年份</td>
                <td><?= $year?></td>
                
            </tr>
            <tr>
                <td>期別</td>
                <td><?= $period ?></td>
                
            </tr>
            <tr>
                <td>號碼</td>
                <td><?= $number1 ?></td>
                
            </tr>
            <tr>
                <td>金額</td>
                <td><?= $money ?></td>
                
            </tr>
        </table>
        <a href="index.php">繼續輸入</a>
        </div>
</body>
</html>
