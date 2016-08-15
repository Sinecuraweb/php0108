<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №2</title><link rel="stylesheet" href="style.css"></head><body><h1>Домашнее задание №2. Задача 2</h1><a href=".">вернуться</a><hr>

<?php
function calc_uno($array,$action = "NULL"){
	foreach ($array as $value) {


		if (!is_numeric($value)) {
                exit("Не корректный ввод чисел, попробуйте ещё");
            }


         	
		// $resultSub -=$value; //Все равно складывает?
		$resultSum +=$value;


		
	}

	for ($i = 0; $i <= count($array); $i++) { 
		    	
		    	$resultSub= $array[$i] - $array[$i+1];
		    	echo "<br>" . $resultSub;
		    	
		  	} 

		  	echo "<br> Колчиество элементов " . count($array) . "<br>";


	$strSum =  "Сумма всех элементов в массиве " .  " = " . " " . "$resultSum";
	$strSub =  "Разница всех элементов в массиве " .  " = " . " " . "$resultSub";


	if ($action == sum) {
		
        return $strSum;
    }

    elseif ($action == sub) {
    	return $strSub;
    }
}


$numberArray = [1,5,7];
echo "<br> Разница 2х элементов в массиве = " . ($numberArray[0] - $numberArray[1]);
$arResult = calc_uno($numberArray, sub);
echo $arResult;



?>


<? 
// $i = 0;
// while ( $i > 0 ) {
			
		
// 			// $resultSub= $array[$i] - $array[$i-1];

// 		}
?>
</body>
</html>