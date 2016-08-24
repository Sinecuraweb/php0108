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


$fields = array();
$fp = fopen('file.csv', 'w');


for($i=0;$i<=count($arRandom);$i++)
{
    fwrite($fp,$arRandom[$i], ';');
}
//fwrite($fp, $arRandom);
fclose($fp);



$row = 1;
if (($handle = fopen("file.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}


?>





</body>
</html>