<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8">
    <title>ДЗ3</title><link rel="stylesheet" href="style.css"></head><body><h1>ДЗ 2 , Задача 3</h1><a href=".">вернуться</a><hr>

<?php
// 1. инициализация
$ch = curl_init();

// 2. указываем параметры, включая url
curl_setopt($ch, CURLOPT_URL, "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
// 3. закрываем соединение
curl_close($ch);
$content = file_get_contents("https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");

preg_match('#("title":".*?)\"#i', $content, $result);
echo $result[0] . "<br />";
preg_match('#("pageid":)[\d]+#i', $content, $result);
echo $result[0];



?>

</body>
</html>