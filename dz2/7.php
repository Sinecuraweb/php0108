<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 7</h1><a href=".">вернуться</a><hr>

<?php

function words_low($str){

	echo "Строка до результата :" . $str;
	echo " " . "<br> Строка после изменения" . mb_strtolower($str);


}

words_low('Карл у Клары украл Кораллы');

function replace_func($str){

}

echo "<br>" . " " . str_replace("Две", "Три", "Две бутылки лимонада");





// echo ucwords('имя решение');





?>

</body>
</html>