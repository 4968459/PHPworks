<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.用while语句实现1+2+...+100=？（1.php）</title>
</head>
<body>
    <?php
        $i = 1;
        $sum = 0;
        while ($i <= 100) {
            # code...
            $sum+=$i;
            $i++;
        }
        echo "1+2+...+100=".$sum;
    ?>
</body>
</html>