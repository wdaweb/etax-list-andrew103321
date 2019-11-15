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
        #div1{
            position: relative;
            top:100px;
            background:#CCEEFF;
            height: 720px;
            width: 700px;
            margin:0 auto;
            border-radius: 5%;
            box-shadow: 0px 0px 20px  rgba(0,0,0,0.5);
        
        }
        #tb1{
            position:relative;
            top:80px;
            left:150px;
        }
        #h1{
            position:relative;
            top:80px;
            left:270px;
        }
        a{
            text-decoration:none;
            border:5px;
        }
        a:active{
            color:black;
        }
        #span1{
            
            background:#f0f0f0;
        }
    </style>
</head>
<body>

<?php
    
?> 
<div id='div1'>
<h1 id='h1'>輸入獎號</h1>
    <form action="prize_api.php" method="post">
    <table border="1" id='tb1'>
        <tr>
          <td><input type="text" name="year" >年</td>
        </tr>
        <tr>
          <td>期別<select name="period" id="">
                <option value="" disable  hidden>---選擇職月份---</option>
                <option value="1">1-2</option>
                <option value="2">3-4</option>
                <option value="3">5-6</option>
                <option value="4">7-8</option>
                <option value="5">9-10</option>
                <option value="6">11-12</option>
        </select></td>
        </tr>
        <tr>
          <td>特別獎<input type="text" name="prize_1" >&nbsp;1000萬</td>
        </tr>
        <tr>
            <td>特獎<input type="text" name="prize_2">&nbsp;200萬</td>
        </tr>
        <tr>
            <td>頭獎<input type="text" name="prize_3"><br>
            頭獎<input type="text" name="prize_4">&nbsp;20萬元<br>
           頭獎<input type="text" name="prize_5"></td><br>

        </tr>
        <tr>
            <td>二獎  頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
        </tr>
        <tr>
            <td>三獎  頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
        </tr>
        <tr>
            <td>四獎  頭獎中獎號碼末5 位相同者各得獎金4千元</td>
        </tr>
        <tr>
            <td>五獎  頭獎中獎號碼末4 位相同者各得獎金1千元</td>
        </tr>
        <tr>
            <td>
            <input type="text" name="prize_6"> <br>
            <input type="text" name="prize_7"> <br>
            六獎   頭獎中獎與六獎號碼末3 位相同者各得獎金2百元</td>
        </tr>
        <tr>
            <td><input type="submit" value="送出">
            <a href="index.php"><span id='span1'>回首頁</span></a>
        </tr>
    </form>
    </div>
    <?php
   
  
    ?>
</body>
</html>