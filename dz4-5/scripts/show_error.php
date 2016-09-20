<?php
  require_once "app_config.php";

  if (isset($_REQUEST['error_message'])) {
    $error_message = preg_replace("/\\\\/", '', 
                                  $_REQUEST['error_message']);
  } else {
    $error_message = "Вы оказались тут из-за сбоя в работе программы " .
                     "how you ended up here.";
  }

  if (isset($_REQUEST['system_error_message'])) {
    $system_error_message = preg_replace("/\\\\/", '',
                            $_REQUEST['system_error_message']);  
  } else {
    $system_error_message = "Сообщения о системных ошибках отсутвуют";
  }
?>

<html>
 <head>
  <link href="../css/main.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>Авторизация SQL</h1></div>
  <div id="example">Очень печально, но ..</div>
  <div id="content">
    <h1> Сори</h1>
    <p><img src="../images/error.jpg" class="error" />
      <?php echo $error_message; ?>
      <span></p>
    <p>Только без паники, команда скорой помощи из программистов уже выехала на ваш адрес, они уже заходят по ssh на сервер , чтобы исправить баг, вызванный
        вашими криворукими действиями.Если вам нужно ежесекундное объяснение напишие сюда :<a href="mailto:sinecura92@mail.ru">Мыло</a>
И вам придет сообщения от нашего бота с инструкциями</p>
    <p>Если вы хотите вернуться на страницу , ставшую причиной ошибки можете <a href="javascript:history.go(-1);"> Тыкнуть тут.</a>
    Если у вас опять возникнет  та же проблема, то попробуй зайти через 62 часа, к этому времени мы успеем найти виноватого и наказать его.
    </p>
    <?php
      debug_print("<hr />");
      debug_print("<p>Такое сообщение было получено об ошибке системного уровня :<b>{$system_error_message}</b></p>");
    ?>
  </div>
  <div id="footer"></div> 
 </body>
</html>
