<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1．用while语句求出100内的奇数、偶数之和。（4.php）</title>
</head>

<body>
    <?php
    $oddsum = 0;
    $evensum = 0;
    $i = 1;
    while ($i <= 100) {
        if ($i % 2 == 0) {

            $evensum += $i;
        } else {

            $oddsum += $i;
        }
        $i++;
    }
    echo "1-100的奇数之和=" . $oddsum . "<br>";
    echo "1-100的偶数之和=" . $evensum
    ?>
</body>

</html>