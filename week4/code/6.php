<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3．用for语句求出100内的奇数、偶数之和。（6.php）</title>
</head>
<body>
    <?php
        $sum = 0;
        $sum1 = 0;
        for($i=1;$i<=100;$i+=2){
            $sum+=$i;
        }
        for($j=0;$j<=100;$j+=2){
            $sum1+=$j;
        }
        echo "1+2+...+100奇数之和=".$sum."<br>";
        echo "1+2+...+100偶数之和=".$sum1;
   ?>
</body>
</html>