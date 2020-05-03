<?php
echo "<h2>    4. 求1！+2！+3！+4！+5！=？（提示：5！=1*2*3*4*5）（35.php）（试用函数来完成编程）</h2>";
function compute($n)
{
    $ss = 0;
    for ($i = $n; $i > 0; $i--) {
        $s = 1;
        for ($j = $i; $j > 0; $j--) {
            $s *= $j;
        }
        $ss += $s;
    }
    return $ss;
}
$resut =  compute(5);
echo "结果为{$resut}";
