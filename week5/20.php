<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.	求3*5*7*9*11*...*21=？（20.php）</title>
</head>
<body>
    <?php
        $s = 1;
        for($i=3;$i<=21;$i=$i+2){
            $s*=$i;
        }
        echo "3*5*7*9*11*...*21={$s}"
    ?>
</body>
</html>