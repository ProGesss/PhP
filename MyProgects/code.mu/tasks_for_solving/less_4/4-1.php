<?php
/*  Задачи на циклы foreach, while, for в PHP
    Задача №1
    Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
 */

    $arr = ['html', 'css', 'php', 'js', 'jq'];
    foreach ($arr as $elem) {
        echo $elem.'<br>';
    }
?>