<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13. 求1！+2！+3！+4！+5！=？（提示：5！=1*2*3*4*5）（28.php）</title>
</head>

<body>
    <!--
        13.	求1！+2！+3！+4！+5！=？（提示：5！=1*2*3*4*5）（28.php）
    -->
    <?php
    $s = 0;
    for ($i = 1; $i <= 5; $i++) {
        $r = 1;
        for ($j = 1; $j <= $i; $j++) {
            $r *= $j;
            // echso $j.'<br>';
        }
        $s += $r;
    }
    echo "1！+2！+3！+4！+5！={$s}"
    ?>
</body>

</html>