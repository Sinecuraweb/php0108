<?php
//
//$mysql = new mysqli('localhost', 'ch33404_testdb', 'PNbftdOu', 'ch33404_testdb');
//
//if(mysqli_connect_errno()){
//    die(mysqli_connect_error());
//
//}
//
//$sql = "SET NAMES 'UTF-8'";
//$mysql->query($sql);

//mysqli_dump_debug_info($mysql);

$mysql=mysqli_connect('localhost', 'ch33404_testdb', 'PNbftdOu')
    or die("<p>Ошибка к подключению БД :" . mysqli_error() . "</p>");

echo "Вы подключились";

mysqli_select_db($mysql, 'ch33404_testdb') or die("<p>Ошибка при выборе БД</p>" . mysql_error() );

echo "<p>Вы подключегы к Mysql</p>";
$result = mysqli_query($mysql,"SHOW TABLES;");

if(!$result){
    die("<p>Ошибка при выводе перечня таблиц: " . mysqli_error() . "</p>");
}

echo "<p>Таблицы ,имеющиеся в базе данных </p>";
echo "<ul>";
while ($row = mysqli_fetch_row($result)) {
    echo "<li>Таблица : {$row[0]}</li>";
}
echo "</ul>";