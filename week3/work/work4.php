<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if (($a >= $b + $c) || ($b >= $c + $a) || ($c >= $a + $b)) {
        echo   "这不是三角形</br>";
        
    }elseif (($a == $b) && ($b == $c)) {
        echo  "这是一个等边三角形</br>";
        
    }elseif($a==$b || $a == $c || $b==$c){
        echo  "这是一个等腰三角形</br>";

    }else{
        echo  "这是普通的三角形</br>";
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
        请输入三个数字：<br />
        <input type="number" name="a" />
        <input type="number" name="b" />
        <input type="number" name="c" /><br />
        <input type="submit" value="计算" />
    </form>

</body>

</html>