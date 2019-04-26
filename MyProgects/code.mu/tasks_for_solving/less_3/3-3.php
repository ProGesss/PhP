<?php
/* Задача №3
   Переменная $lang может принимать два значения: 'ru' и 'en'.
   Если она имеет значение 'ru', то в переменную $arr запишем массив дней
   недели на русском языке, а если имеет значение 'en' – то на английском.
   Решите задачу через 2 if, через switch-case и через многомерный массив без ифов и switch.
 */

    $lang = 'ru';

    if ($lang == 'ru') {
        $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    }

    if ($lang == 'en') {
        $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
    }

    var_dump($arr);
?>

    //Решение через switch-case:
<?php

    $lang = 'ru';

    switch ($lang) {
        case 'ru':
            $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
        break;
        case  'en':
            $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
        break;
    }

    var_dump($arr);
?>

<?php

    $lang = 'ru';

    $arr = [
        'ru'=>['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
        'en'=>['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
    ];

    var_dump($arr[$lang]);

?>