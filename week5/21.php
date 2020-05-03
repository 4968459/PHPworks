<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. 求数列2/1,3/2,5/3,8/5,13/8,21/13,...的前15项之和，第15项的数是多少？（21.php）</title>
</head>

<body>
    <?php
    $a = 2;
    $b = 1;
    $s = 0;
    for ($n = 1; $n <= 15; $n++) {
        if($n==15){
            echo "数列的第15项为{$a}/{$b}<br>";
         }
        $s = $s + $a / $b;
        $t = $a;
        $a = $a + $b;
        $b = $t;
       
    }
    print("数列2/1,3/2,5/3,8/5,13/8,21/13,...的前15项之和结果：" . $s);
    ?>
</body>

</html>