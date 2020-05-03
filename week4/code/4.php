<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1．用while语句求出100内的奇数、偶数之和。（4.php）</title>
</head>

<body>
    <?php
    $i = 1;
    $sum = 0;
    $sum1 = 0;
    while ($i <= 100) {
        # code...
        $sum += $i;
        $i+=2;
    }
    $i = 0;
    while ($i <= 100) {
        # code...
        $sum1 += $i;
        $i+=2;
    }
    echo "1+2+...+100奇数之和=" . $sum . "<br>";
    echo "1+2+...+100偶数之和=" . $sum1;
    ?>
</body>

</html>