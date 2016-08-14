<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>Практикум №4 - "Управляющие конструкции"</h1><a href=".">вернуться</a><hr>

<?php

/* Ex.1 рекурсия */
// function recursive0()
// {
//     echo 'вошли в функцию (0)<br>';
//     // идентичный код
//     recursive1();
//     echo 'вышли из функции (0)<br>';
// }

// function recursive1()
// {
//     echo 'вошли в функцию (1)<br>';
//     // идентичный код
//     recursive2();
//     echo 'вышли из функции (1)<br>';
// }

// function recursive2()
// {
//     echo 'вошли в функцию (2)<br>';
//     // идентичный код
//     echo 'вышли из функции (2)<br>';
// }
// recursive0(0);


/* Ex.2 рекурсия */
// function recursive($a){
//     echo 'вошли в функцию ('.$a.')<br>';
//     // идентичный код
//     if($a < 7) recursive($a + 1);
//     echo 'вышли из функции ('.$a.')<br>';
// }
// recursive(0);

/* Ex.3 рекурсия + статика */
// function recursive($a){
//     static $num = 0;
//     echo 'вошли в функцию ('.$a.') - num == '.$num.'<br>';
//     $num++;
//     if($a < 20) recursive($a + 1);
//     echo 'вышли из функции ('.$a.') - num == '.$num.'<br>';
// }
// recursive(0);

/* Ex.4 - Анонимная функция */
// $func = function() {
//     echo 'Внутри анонимки';
// };
// $func();

/* Ex.5 - анонимка как callback */
// function func($param, $filtr) {
//     //echo 'внутри func - Param = '.$param.'<br>';
//     $filtr($param);
// }

// func(25,function($val){
//     echo 25*25, '<br>';
// });

// func('строку',function($val){
//     echo $val.$val.$val.$val;
// });

/* Ex.6 - наследование переменных */
// $name = 'Василий';
// $age = function() use ($name) {
//     echo 'Его имя '.$name.' и ему '.mt_rand(18,50).' лет';
// };
// $age();

// function zzz(){
//     echo '1111zzz';
// }

// function func($sfunc) {
//     $sfunc();
// }

// func('zzz');

/* Ex.7 - условно определяемые функции */
// $who = mt_rand(0,3);
// if ($who == 0) {
//     function func() { 
//         echo 'Он будет играть: Палладином';
//     }
// } elseif ($who == 1) {
//     function func() { 
//         echo 'Он будет играть: Чернокнижником';
//     }
// } elseif ($who == 2) {
//     function func() { 
//         echo 'Он будет играть: Магом';
//     }
// } else {
//     function func() { 
//         echo 'Он вообще не будет играть';
//     }
// }
// func();

?>

</body>
</html>