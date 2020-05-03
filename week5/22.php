<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>求下面的Armstrong（水仙花）数</title>
</head>

<body>
    <!-- 
    7.	求下面的Armstrong（水仙花）数，
    Armstrong数是一个N位数,它的值等于每位数字的N次幂的和。
    例如153=1^3+5^3+3^3。试求999以内的Armstrong数。（22.php）
     -->
    <?php

    for ($i = 10; $i <= 999; $i++) {
        $len = mb_strlen($i); //数字位数
        $s = 0;
        for ($j = 0; $j < $len; $j++) {
            $n = (string) ($i); //转换字符串
            $s += pow($n[$j], $len); //pow()接收两个参数 第一个x第二个y 。输出x的y次方结果
        }
        if ($i == $s)
            echo "数字为{$i}的时候结果为" . $s . "<br>";
        // break;
    }
    ?>

</body>

</html>