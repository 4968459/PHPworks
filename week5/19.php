<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.	求1+1/2+1/3+……+1/50=？（19.php）</title>
</head>
<body>
<!-- 4.	求1+1/2+1/3+……+1/50=？（19.php） -->
    <?php
        $s=0;
        for($i=1;$i<=50;$i++){
            $s+=1/$i;
        }
        echo "1+1/2+1/3+……+1/50结果为".$s;
    ?>
</body>
</html>