<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Практикум №4</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 8</h1><a href=".">вернуться</a><hr>

<?php

function network_test ($str) {
    $packet = "#\:\)#";
    preg_match($packet, $str, $result_temp);
    if($result_temp[0] == ":)") {
        echo chr(61) . chr(94) . chr(95) . chr(94) . chr(61); //smile
    } else {
        // Проверяем на количество пакетов
        preg_match("#(packets.*?)\s#i", $str, $result_temp);
        preg_match("#\d.*#", $result_temp[0], $result);
        if ((int)$result[0] > 1000) {
            echo "Сеть есть";
        } else {
            echo "Сети нет";
        }
    }
}
network_test ("RX packets:1001 errors:0 dropped:0  overruns:0 frame:0. ");
echo "<br>";
network_test ("RX packets:1001 errors:0 dropped:0  overruns:0 frame:0. ");
echo "<br>";
network_test ("RX packets:100 errors:0 dropped:0 :) overruns:0 frame:0. ");


?>

</body>
</html>