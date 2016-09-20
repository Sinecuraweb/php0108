<?php

require 'database_connection.php';





$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$bio = trim($_REQUEST['bio']);
$vkontakte_url = str_replace("vk.com", "vkontakte.com", trim($_REQUEST['vkontakte_url']));
$position = strpos($vkontakte_url, "vk.com");
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

$insert_sql = "INSERT INTO users (first_name, last_name, email, bio, vkontakte_url, twitter_handle) " . "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$bio}' " .
                      "'{$vkontakte_url}', '{$twitter_handle}');";



//Добавить пользователя  в базу данных
mysqli_query($mysql,$insert_sql) or die(mysqli_error($mysql));

//Отправляем пользователя на свой профиль
header("Location: show_user.php?user_id=" . mysqli_insert_id($mysql));




