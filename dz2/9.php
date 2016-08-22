<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css">
</head><body><h1>ДЗ 2 , Задача 9</h1><a href=".">вернуться</a><hr>

<?php


//$str = file_get_contents('http://about.sinecuraweb.ru/dz2/test2.txt');
//echo $str;
function print_text($strName) {
    echo file_get_contents('http://about.sinecuraweb.ru/dz2/' . $strName .'.txt');

}

print_text(test1);



?>
</body>
</html>