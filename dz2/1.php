<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №1</title><link rel="stylesheet" href="style.css"></head><body><h1>Домашнее задание №2. Задача 1</h1><a href=".">вернуться</a><hr>

<?php

function get_param($array, $type = false) {
	foreach ($array as $value) {
        echo "<p>" . $value . "</p>";
    }
    if ($type == true) {
        return implode($array);
    }
}


$my_array = ["Строка раз", "Строка 2", "ии ещё строка"];
$str = get_param($my_array, true);
echo $str;



?>

</body>
</html>