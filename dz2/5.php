<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 5</h1><a href=".">вернуться</a><hr>

<?php

function palindrom_func($strPalindrom){


	if ($strPalindrom == trim(strrev($strPalindrom))) {
	 	
	 	return true;

	 }

	 else {
	 	return false;
	 }
}

// $arResult = palindrom_func($strPalindrom);

function print_palindrom(palindrom_func($strPalindrom)) {

	if ($arResult == true) {
		echo "Палиндром";
	}

	else echo "Не Палиндром";
	
}


$strPrint = palindrom_func("122111");
echo $strPrint;

?>

</body>
</html>