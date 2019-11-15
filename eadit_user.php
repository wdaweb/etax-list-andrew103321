<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <style>
        body{
          overflow:hidden;
          margin: 0;
          padding: 0;
          box-sizing: border-box;  
          background: linear-gradient(to top, #00416a, #e4e5e6 ); 
          height:100vh;
          font-family: "微軟正黑體";
        }
        .sqare_out{
            position: relative;
            background:#CCEEFF;
            height: 750px;
            width: 700px;
            margin:0 auto;
            border-radius: 10px;
            box-shadow: 0px 0px 20px  rgba(0,0,0,0.5);
        }
        .sqare_in{
            padding-left:50px;
            text-align: left;
            width:550px;
            height: 550px;
            background: white;
            border-radius :10px;
            position: absolute; left:8%; top:12%;
            line-height: 90px;
            
        }
        span{
            font-size:25px;
        } 
        </style>
</head>
<body>
<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo = new pdo($dsn,'root','');

if(!empty($_GET['id'])){

  $id = $_GET['id'];
  $period  = $_GET['period'];

  $sql = "SELECT * FROM `user` WHERE id='$id'";
 
  $rows=$pdo->query($sql)->fetchALL();

?>
<?php
foreach($rows as $v){
?>
<div class="sqare_out">
<div class =sqare_in>  
<form action="eadit_user.php" method="POST" >
<span>年份:</span>
    <input type="text" name="year" value="<?=$v['year']?>"  ><br>
    <span>期別:</span><select name="period" id="" style="font-size:25px ">
        <option value="<?=$v['period']?>" disable select hidden  >---選擇職月份---</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select><br>
    <span>發票號碼:</span><input type="text" name="str" size="2" value="<?=substr($v['number'],0,2)?>">
            <input type="text" name="number" size="20" value="<?=substr($v['number'],2,10)?>"><br>
    <span>發票金額:</span><input type="text" name="money" value="<?=$v['money']?>"> <br>
            <input type="hidden" name="id2" value="<?=$id?>">
            <input type="hidden" name="period2" value="<?=$period?>">
            <input type="submit"  value="送出"  style="width:50px;height:50px; ">   
</form>
<?php
}
} 
if(!empty($_POST['id2'])){
    $id2 = $_POST['id2'];
    $period2 = $_POST['period2'];
     $year = $_POST['year'];
     $period= $_POST['period'];
     $str = $_POST['str'];
     $number = $_POST['number'];
     $number1 =  $str.$number;
     $money = $_POST['money'];

    echo "<br>";
    $sql="UPDATE `user` SET`number`='$number1',`money`=$money,`period`
    ='$period',`year`='$year' WHERE id='$id2'";
    // echo  $sql;
    $pdo->exec($sql);
    echo "<a href='data.php?id=$period2'>編輯完成，發票頁面</a>";
}

?>
</body>
</html>


