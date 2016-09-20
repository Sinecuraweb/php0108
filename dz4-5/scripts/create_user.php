<?php

require_once 'app_config.php';
require_once 'database_connection.php';

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$bio = trim($_REQUEST['bio']);
$vkontakte_url = str_replace("vk.com", "vkontakte.com", trim($_REQUEST['vkontakte_url']));
$position = strpos($vkontakte_url, "vk.com");

$upload_dir = HOST_WWW_ROOT . "uploads/profile_pics/";
$image_fieldname = "user_pic";

//Потенциальные ошибки при отправке файлов
$php_errors = array(1=>'Превышен макс.размер файла указаный в php.ini',
    2=>'Превышен макс. размер файла указанный в форме html',
    3=>'Была отправлена только часть файла',
    4=>'Файл отправки не был выбран');


if ($position === false) {
  $vkontakte_url = "http://www.vk.com/" . $vkontakte_url;
}

$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
  $twitter_url = $twitter_url . $twitter_handle;
} else {
  $twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
}

//Проверка отсутствия ошибки при загрузке изображения
($_FILES[$image_fieldname]['error'] == 0) or handle_error("сервер не может получить выбранное вами изображене" , $php_errors[$_FILES[$image_fieldname]['error']]);

//Является ли файл нормальным результатом отправки?
@is_uploaded_file($_FILES[$image_fieldname]['tmp_name']) or handle_error("Вы попытались обмануть, за вами уже выехали" , "Запрос на отправку: файл назывался 1" . "'{$_FILES[$image_fieldname]['tmp_name']}'");

//Дейтсвительно ли это изображение?
@getimagesize($_FILES[$image_fieldname]['tmp_name']) or handle_error("Вы выбрали файл для фото, который не является изображением", "{$_FILES[$image_fieldname]['tmp_name']}" . "не является файлом картинкой");

//Уникальное название файла
$now = time();
while (file_exists($upload_filename = $upload_dir . $now . $_FILES[$image_fieldname]['name'])) {
    $now++;
}

//Перемещаем файл на постоянное место на сервере
@move_uploaded_file($_FILES[$image_fieldname]['tmp_name'], $upload_filename) or handle_error("Возникла проблема сохранения вашего изображения в его постоянном месте," ,"ошибка свяанная с правами доступа при перемещении файла в" . "{$upload_filename}");


////через mysqli
//$insert_sql = "INSERT INTO users (first_name, last_name, email, bio, vkontakte_url, twitter_handle) " . "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$bio}' " .
//                      "'{$vkontakte_url}', '{$twitter_handle}');";
//
//Добавить пользователя  в базу данных
//mysqli_query($mysql,$insert_sql) or die(mysqli_error($mysql));


//Вставка данных через PDO
$STH = $DBH->prepare("INSERT INTO users ( first_name, last_name,email, bio, vkontakte_url, twitter_handle, user_pic_path) values ( '{$first_name}', '{$last_name}', '{$email}', '{$bio}', '{$vkontakte_url}', '{$twitter_handle}', '{$upload_filename}' )");
$STH->execute();
//Отправляем пользователя на свой профиль
header("Location: show_user.php?user_id=" . $DBH->lastInsertId());

