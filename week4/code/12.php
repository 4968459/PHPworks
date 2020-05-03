<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2．求1×2×3×4×……×20之乘积。（12.php）</title>
</head>
<body>
    <?php
        $sum = 1;
        for($i=1;$i<=20;$i++){
        $sum*=$i;
        // $sum = $sum*$i;
        }
        echo '1×2×3×4×……×20之乘积='.$sum;
    ?>
</body>
</html>