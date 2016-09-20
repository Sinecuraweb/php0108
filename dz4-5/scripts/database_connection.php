<?php
  require_once 'app_config.php';

//$mysql=mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) or die("<p>Ошибка к подключению БД :" .
//    mysqli_error($mysql) . "</p>");
//mysqli_select_db($mysql, DATABASE_NAME) or die("<p>Ошибка при выборе БД</p>" . mysqli_error($mysql) );
//Через pdo DATABASE HANDLE

//$DBH = new PDO("mysql:host=DATABASE_HOST;dbname=DATABASE_USERNAME", DATABASE_NAME,DATABASE_PASSWORD);
$DBH=new PDO('mysql:dbname=ch33404_testdb;host=localhost','ch33404_testdb','PNbftdOu') or handle_error("Возникла проблема, связаанная с поключением к базе данных, содержащей нужную информацию");
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

