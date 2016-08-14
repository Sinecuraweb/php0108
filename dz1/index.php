<?php
// задание 1 
$name = "Egor Tregubenko";
$age = "24 года";
echo "Меня зовут $name";
echo "<br/> Мне $age";
echo '<br>“!|\/’” \'\\\'';


// Задача 2
echo "<br><br>";
$all_pic = 80;
$marker_pic = 23;
$pencil_pic = 40;
$paint_pic = $all_pic - $marker_pic-$pencil_pic;
echo "Выполнено красками - $paint_pic (<b>Задача 2</b>)";

//3

echo "<br><br>";
define("DOMBUDKA", 100, true);
if (defined("DOMBUDKA")){
    echo "<br>DOMBUDKA -существует<br>";
}


// echo isset(DomBudka);
// if (isset(DomBudka)) {
// 	echo "Существует";
// }

// else echo "Не существует";
echo DOMBUDKA . "  - Значение константы (задача 3)";
define("DOMBUDKA", 99, true);
echo "<br> После изменения значение переменной = " . DOMBUDKA;


//4
echo "<br><br>";
if ($age > 18 and $age <= 65) {
	echo "Вам ещё работать и работать";
} elseif ($age > 65) {
	echo "Вам пора на пенсию";
} elseif ($age < 18 and $age > 1) {
	echo "Вам ещё рано работать";
} elseif ($age < 1 ) {
	echo "Неизвестный возраст";
}


//5
echo "<br><br>";

$day = 7;
switch ($day) {
		case '1': echo 'Это рабочий день  = ( ';
		break;
		case '2': echo 'Это рабочий день  = ( ';
		break;
		case '3': echo 'Это рабочий день  = ( ';
		break;
		case '4': echo 'Это рабочий день  = ( ';
		break;
		case '5': echo 'Это рабочий день  = ( ';
		break;
		case '6': echo 'Выходной =)';
		break;
		case '7': echo 'Выходной =) ';
		break;
	
	default: echo "Неизвестный день!";
	
		break;
}

//6
echo "<br><br>";
$bmw = array(
	"model" => "X5",
	"speed" => 120,
	"doors" => 5,
	"year" => 2015
	);
$toyota = array(
	"model" => "ipsum",
	"speed" => 160,
	"doors" => 4,
	"year" => 2009
	);

$opel = array(
	"model" => "XZ",
	"speed" => 190,
	"doors" => 2,
	"year" => 2014
	);

$car = [$bmw, $toyota, $opel];



// echo "Car bmw : (Задача 6) <br>" . "$bmw[model] $bmw[speed] $bmw[doors] $bmw[year]" . "<br>";
// echo "Car toyota : (Задача 6) <br>" . "$toyota[model] $toyota[speed] $toyota[doors] $toyota[year]" . "<br>";
// echo "Car opel : (Задача 6) <br>" . "$opel[model] $opel[speed] $opel[doors] $opel[year]" . " <br>";
// $arrResult = $opel + $toyota + $bmw;
// print_r($arrResult);

foreach ($car as $value) {
    echo "Car " .$value['name'] . "<br />";
    echo $value['model'] . " - " . $value['speed']. " - " . $value['doors']. " - " . $value['year'] . "<br /><br />";
}
//7 

echo "<br><br> <b>Таблица умножения</b> :<br>";

?>

<table>
<?PHP
for($i = 0; $i < 10; $i++) {
  echo'<tr>';
  for($j = 0; $j < 10; $j++)
    echo '<td>',$j?$i?$i*$j:$j:$i,'</td>';

  echo'</tr>';



}
?>
</table>


<!-- 8 -->

<?php
echo "<br><br>";
$phraze = "<b><i>Меня сожгут, но это лишь эпизод. Мы продолжим нашу дискуссию в вечности </b></i><br>";
echo $phraze;

$strArr = explode(',' , $phraze);
echo "$strArr[0]" . "$strArr[1]"; 


 for($i = 0; $i < count($strArr); $i++) 
  { 
     echo $strArr[$i]; 
  } 

echo "<br>";
while(list(, $value) = each($strArr))
{
echo $value . ',';   
}
