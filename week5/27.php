<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 
        12.	打印  
            1 2 3 4 5 6   i=7
              1 2 3 4 5  6   i=6
                1 2 3 4  5 6   i=5
                  1 2 3  4 5 6
                    1 2  3 4 5 6
                      1  2 3 4 5 6
                         1 2 3 4 5 6
     -->
    <?php
    for ($i = 7; $i > 0; $i--) {
        for ($j = 1; $j <= 6; $j++) {
            if ($i == $j) {
                echo " $j";
            } else {
                echo $j;
            }
        }
        echo "<br>";
    }

    ?>
</body>

</html>