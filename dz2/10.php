<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title>
    <link rel="stylesheet" href="style.css">
</head><body><h1>ДЗ 2 , Задача 10</h1><a href=".">вернуться</a><hr>

<?php

// строка, которую будем записывать
$text = "Hello again";

// открываем файл, если файл не существует,
//делается попытка создать его
$fp = fopen("file.txt", "w");

// записываем в файл текст
fwrite($fp, $text);

// закрываем
fclose($fp);


?>

</body>
</html>