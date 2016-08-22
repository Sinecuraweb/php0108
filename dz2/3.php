<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>ДЗ №2</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ2 , задача 3</h1><a href=".">вернуться</a><hr>

<?php

function math_desc() {
    // Число аргументов
    $numargs = func_num_args();
//    echo $numargs;

    //Знак математической операции

    //Массив c аргументами
    $arg_list = func_get_args();

    $mathOperate = $arg_list[0];
    $arSum = 0;
    $arSub = 0;
    $arDev = 0;
    $arMult = 0;


    for ($i = 1; $i < $numargs; $i++) {
        $arSum = $arg_list[$i] + $arSum;
        $arSub = $arSub - $arg_list[$i];
        $arDev = $arDev / $arg_list[$i];
        $arMult = $arMult * $arg_list[$i];
    }

    $strSum = "Сумма всех аргументов функции = " . $arSum;
    $strSub = "Разница всех аргументов функции = " . $arSub;
    $strDev = "Деление всех аргументов функции = " . $arDev;
    $strMult = "Произведение всех аргументов функции = " . $arMult;

    if ($mathOperate == '+') {

        return $strSum; //return не работает?!
        

    }
    if ($mathOperate == "-") {
        return $strSub;
    }

    if ($mathOperate == "/") {
        return $strDev;
    }

    if ($mathOperate == "*") {
        return $strMult;
    }


}

$numberArray = math_desc("+",3,2,10,10,2);







?>

</body>
</html>