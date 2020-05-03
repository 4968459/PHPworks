<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3．输出1×10，2×10，3×10，4×10，5×10，6×10的值。（13.php）</title>
</head>

<body>
    <?php
    // $sum = 1;
    for ($i = 1; $i <= 6; $i++) {
        $sum = $i * 10;
        echo "{$i}乘10 = " . $sum."<br>";
    }
    ?>
</body>

</html>