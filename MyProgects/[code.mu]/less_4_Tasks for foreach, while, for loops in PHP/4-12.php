<?php
/*  Задача №12
    С помощью цикла найдите сумму чисел от 1 до 100.
 */

    $sum = 0;
    $i = 1;
    while ($i <= 100) {
        $sum += $i;
        $i++;
        echo $sum.'<br>';
}

?>

<?php

    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }   print_r($sum);


?>