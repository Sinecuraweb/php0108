<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 5</h1><a href=".">вернуться</a><hr>

<?php


$strPalindrom = "1111";

function palindrom_func($strPalindrom){


	if ($strPalindrom == trim(strrev($strPalindrom))) {
	 	
	 	return true;

	 }

	 else {
	 	return false;
	 }


	 	function print_palindrom(){

		
		echo palindrom_func($strPalindrom);
	}

}
// $arResult = 
// 	 echo "Бул" . "=" . $arResult;

// $strPrint = palindrom_func("11131");
// echo $strPrint;





?>

</body>
</html>