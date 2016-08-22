<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 6</h1><a href=".">вернуться</a><hr>

<?php

$date_today = date("m.d.Y"); 



$today[1] = date("H:i"); 
echo("Сегодня: $date_today .  время: $today[1]");

function time_unix($date) {
     echo "<br> Время в юникс формате" . strtotime($date);
}

time_unix("24.02.2016 00:00:00");


?>

</body>
</html>