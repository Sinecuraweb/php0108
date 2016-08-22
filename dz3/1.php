<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>ДЗ 3</title><link rel="stylesheet" href="style.css"></head><body><h1>Домашнее задание №3. Задача 1</h1><a href=".">вернуться</a><hr>

<?php


$xml = simplexml_load_file('data.xml');
foreach ($xml->Address as $result) {
    echo "<b>Client who: </b>" . $result[Type] . "<br />";
    echo "Name: " . $result->Name . "<br />";
    echo "Street: " . $result->Street . "<br />";
    echo "City: " . $result->City . "<br />";
    echo "State: " . $result->State . "<br />";
    echo "Zip: " . $result->Zip . "<br />";
    echo "Country: " . $result->Country . "<br />";
    echo "<br />" . "=========" . "<br/>";
}

foreach ($xml->Items->Item as $result) {
    echo "<b>Item ID: </b>" . $result[PartNumber] . "<br />";
    echo "Product name: " . $result->ProductName . "<br />";
    echo "Quantity: " . $result->Quantity . "<br />";
    echo "Price, $: " . $result->USPrice . "<br />";
    echo "Ship date: " . $result->ShipDate . "<br />";
    echo "<br />" . "=========" . "<br/>";
}

?>

</body>
</html>