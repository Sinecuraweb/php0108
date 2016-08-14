<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №3</title><link rel="stylesheet" href="style.css"></head><body><h1>Практикум №3 - "Области видимости"</h1><a href=".">вернуться</a><hr>

<?php

/* Ex.1 - просто видимость */
// function func($name){
//     echo '(f) Привет, '.$name.'<br>';
//     $name = 'Света';
//     echo '(f) Привет, '.$name.'<br>';
// }

// $name = 'Ира';
// echo 'Привет, '.$name.'<br>';
// func('Коля');
// echo 'Привет, '.$name.'<br>';

/* Ex.2 - обращение к глобальной области видимости №1 */
// function func2($name){
//     echo '(f) Привет, '.$name.'<br>';
//     global $name; // задали в функции область видимости для переменной $name
//     $name = 'Света';
//     echo '(f) Привет, '.$name.'<br>';
// }

// $name = 'Ира';
// echo 'Привет, '.$name.'<br>';
// func2('Коля');
// echo 'Привет, '.$name.'<br>';

/* Ex.3 - обращение к глобальной области видимости №2 */
// function func3($name){
//     echo '(f) Привет, '.$name.'<br>';
//     $GLOBALS['name'] = 'Петя';
//     echo '(f) Привет, '.$name.'<br>';
// }
// $name = 'Ира';
// echo 'Привет, '.$name.'<br>';
// func3('Коля');
// echo 'Привет, '.$name.'<br>';

?>

</body>
</html>