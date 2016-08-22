<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>ДЗ №2</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ2 , задача 3</h1><a href=".">вернуться</a><hr>

<?php

$arRandom = array();

$i = 0;


while ($i <= 100) {
    $i++;
    $numbRandom = rand(0,100);
    array_push($arRandom, $numbRandom);

}

print_r($arRandom);



$fp = fopen('file.csv', 'w');

foreach ($arRandom as $fields) {
    fputcsv($fp, $fields);
}
fclose($fp);
?>



</body>
</html>