<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>ДЗ №2</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ2 , задача 3</h1><a href=".">вернуться</a><hr>

<?php

function math_desc(){

	// for ($i = 0; $i < func_num_args(); $i++) {
	// 	echo "Параметр номер $i :" . func_get_arg($i) . "<br>";
	// }

	// Число аргументов
	$numargs = func_num_args();

	//Знак математической операции
	$mathOperate = func_get_arg(0);

	//Массив c аргументами
	$arg_list = func_get_args();

	for ($i = 1; $i < $numargs; $i++) {
			$arSum = $arSum + $arg_list[$i];


    }

     if ($mathOperate = '+') {
    	return $strSum
    }
    //Вывод
    $strSum = "Сумма всех аргументов функции = " . $arSum;

    // echo $mathOperate;
    

   


$numberArray = math_desc("+",3,2,10,10,2);

//  switch ($mathOperate) {
//     	case '+':
//     		return $strSum;
//     		break;
    	
//     	default: "Введите корректный знак математической операции";
//     		# code...
//     		break;
//     }

// }





?>

</body>
</html>