<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2.用do-while语句实现1+2+...+100=？（2.php）</title>
</head>
<body>
    <?php
        $i = 1;
        $sum = 0;
        do{
            $sum+=$i;
            $i++;
        }while($i<=100);
        echo "1+2+...+100=".$sum;
    ?>
</body>
</html>