<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2．用do-while语句求出100内的奇数、偶数之和。（5.php）
    </title>
</head>

<body>
    <?php
    $i = 1;
    $sum = 0;
    $sum1 = 0;
    do {
        $sum += $i;
        $i += 2;
    } while ($i <= 100);
    $i = 0;
    do {
        # code...
        $sum1 += $i;
        $i += 2;
    } while ($i <= 100);
    echo "1+2+...+100奇数之和=" . $sum . "<br>";
    echo "1+2+...+100偶数之和=" . $sum1;
    ?>
</body>

</html>