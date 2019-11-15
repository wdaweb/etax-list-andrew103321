<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
     $array = [] ; 
     for($i=0;$i<10;$i++){
    $str1 = rand(65,90);
    $str2 = rand(65,90);
    $number = rand(1,99999999);

    //  str_pad (來源字串,要補到幾個字,要補什麼字,從哪裡開始補)
    //  從哪裡開始補 1.左右都補:STR_PAD_BOTH ,2.由左邊開始補:STR_PAD_LEFT , 3.由右邊開始補:STR_PAD_RIGHT
    $number1 =str_pad( $number,8,"0",STR_PAD_LEFT);
    $str3 = chr($str1).chr($str2).$number1;

    $period = rand(6,6);
    $money = rand(50,99999);
           
        $dsn = "mysql:host=localhost;charset=utf8;dbname=mydb";
         $pdo = new pdo($dsn,'root','');
         
         
         
         
         if(in_array($str3,$array)){
             $i--;
            }else{
                $array[] = $str3;   
                $sql  =  "insert into user ( `id`, `number`, `money`, `period`, `year`)
                values('null','$str3','$money','$period ','2019')";
                echo "sql語法是 :".$sql;
                $result=$pdo->query($sql);
            }
        }
        
          print_r($array); 
       
    
     ?>

</body>
</html>