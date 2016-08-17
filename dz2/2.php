<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №2</title><link rel="stylesheet" href="style.css"></head><body><h1>Домашнее задание №2. Задача 2</h1><a href=".">вернуться</a><hr>

<?php
function calc_uno($array,$action = "NULL"){
	foreach ($array as $value) {


		if (!is_numeric($value)) {
                exit("Не корректный ввод чисел, попробуйте ещё");
            }

        //Складываем
		$resultSum +=$value;
	}


	//Первое значения для операции
	$resultMult = $array[0];
	$resultSub = $array[0];
	$resultDev = $array[0];

	//Вычитаем
	for ($i = 1; $i < count($array); $i++) { 
		    	$resultSub = $resultSub - $array[$i];
		  	}

	//Делим
	for ($i = 1; $i < count($array); $i++) { 
		    	$resultDev = $resultDev / $array[$i];
		  	}

	//Умножаем

	for ($i = 1; $i < count($array); $i++) { 
		    	$resultMult = $resultMult / $array[$i];	
		  	}	  	

	$strSum =  "Сумма всех элементов в массиве " .  " = " . " " . "$resultSum";
	$strSub =  "Разница всех элементов в массиве " .  " = " . " " . "$resultSub";
	$strDev =  "Деление всех элементов в массиве " .  " = " . " " . "$resultDev";
	$strMult = "Умножение всех элементов в массиве " .  " = " . " " . "$resultMult";

	if ($action == sum) {
		
        return $strSum;
    }

    elseif ($action == sub) {
    	return $strSub;
    }

     elseif ($action == dev) {
    	return $strDev;
    }

     elseif ($action == mult) {
    	return $strMult;
    }
}


$numberArray = [10,5,1,20,30,1,0.6];

$arResult = calc_uno($numberArray, mult);
echo $arResult;

?>
</body>
</html>