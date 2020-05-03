<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //最大公约数计算函数
    function gys($a, $b)
    {
        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }
        return $a;
    }
    function biJiao($a,$b){
        if($a>$b){
            return "$a";
        }else if($a<$b){
            return $b;
        }else{
            return "相等";
        }
    }

    if (is_numeric($_POST['a']) && is_numeric($_POST['b'])) {
        echo $_POST['a'] . '和' . $_POST['b'] . '中比较大的数是：' . biJiao($_POST['a'], $_POST['b']) . '<br /><br />';
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        请输入两个数字：<br />
        <input type="text" name="a" />
        <input type="text" name="b" /><br />
        <input type="submit" value="计算" />
    </form>

</body>

</html>