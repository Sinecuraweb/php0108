<?php

require_once 'database_connection.php';

// Получаем ид текущего юзера
$user_id = $_REQUEST['user_id'];

// Создаем инструкцию select
//$select_query = "SELECT * FROM users WHERE user_id = " . $user_id;
$result= $DBH->prepare("SELECT * FROM users WHERE user_id  = " . $user_id);
$result ->execute();
// Запускаем запрос


//$result = mysqli_query($DBH,$select_query);



if ($result) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $first_name     = $row['first_name'];
    $last_name      = $row['last_name'];
    $bio            = preg_replace("/[\r\n]+/", "</p><p>", $row['bio']);
    $email          = $row['email'];
    $facebook_url   = $row['vkontakte_url'];
    $twitter_handle = $row['twitter_handle'];
    $user_image = $row['user_pic_path'];
  // Превращаем твитер в урл
  $twitter_url = "http://www.twitter.com/" . 
                 substr($twitter_handle, $position + 1);

} else {
    hande_error("Возникла проблема с поиском вашей информации на нашей стене", "Ошибка обнаружения пользователя с ID {$user_id}");
}

?>                                  

<html>
 <head>
  <link href="../css/main.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>Личная страница</h1></div>
  <div id="example">Ваш профиль :</div>

  <div id="content">
    <div class="user_profile">
      <h1><?php echo "{$first_name} {$last_name}"; ?></h1>
      <p><img src="<?php echo $user_image; ?>" class="user_pic" />
        <?php echo $bio; ?></p>
      <p class="contact_info">Связаться с<?php echo $first_name; ?>:</p>
      <ul>
        <li>...по мылу
          <a href="<?php echo $email; ?>"><?php echo $email; ?></a></li>
        <li>...или
          <a href="<?php echo $vkontakte_url; ?>">Написать в вк</a></li>
        <li>...или <a href="<?php echo $twitter_url; ?>">.. можете чекнуть твитер</a></li>
      </ul>
    </div>
  </div>
  <div id="footer"></div>
 </body>
</html>
