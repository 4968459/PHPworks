<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 获取当前系统时间的秒数值，当秒数值为单数时，水平线为蓝色；否则为绿色 -->
<?php
    $a = date("s");
    echo $a;
   echo '<br>';

    if($a%2==0){
        echo "<hr color=blue>";
    }else {
        echo "<hr color=green>";
    };
    ?>
</body>
</html>

