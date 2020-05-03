<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1．计算1＋2＋3＋…＋10的值。（11.php）
</title>
</head>
<body>
    <?php
        $sum = 0;
        for($i=1;$i<=10;$i++){
            $sum+=$i;
        }
        echo '1＋2＋3＋…＋10的值='.$sum;
    ?>
</body>
</html>