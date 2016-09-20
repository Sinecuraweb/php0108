<?php
require '../scripts/database_connection.php';

$query_text = $_REQUEST['query'];
$result = mysqli_query($mysql,$query_text);

$return_rows = true;

if (preg_match("/^(CREATE| INSERT|UPDATE|DELETE|DROP)/", trim(strtoupper($query_text)))) {
    $return_rows = false;
}
if (!$result) {
    die("<p>Ошибка при выполнении SQL-запроса" . $query_text . ":" . mysqli_error($mysql) . "</p>");

}

echo "<p>Результаты вашего запроса: </p>";
echo "<ul>";

//Выводит построчно результат
while ($row = mysqli_fetch_row($result)) {
    echo "<li>{$row[0]} </li>";
}

echo "</ul>";

