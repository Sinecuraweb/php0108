<?php
//Данные подключения бд
define("DATABASE_HOST", "localhost");
define("DATABASE_USERNAME", "ch33404_testdb");
define("DATABASE_PASSWORD", "PNbftdOu");
define("DATABASE_NAME", "ch33404_testdb");

//Режим отладики
define("DEBUG_MODE", true);

//Корень сайта
define("SITE_ROOT", "/test/");

//Корень сайта хостинга
define("HOST_WWW_ROOT"," /home/c/ch33404/testsite/public_html/test/");

function debug_print($message) {
    if(DEBUG_MODE) {
        echo $message;
    }
}

function handle_error($user_error_message, $system_error_message){
    header("Location:" . SITE_ROOT . "scripts/show_error.php?error_message={$user_error_message} & system_error_message={$system_error_message}");
    exit();
}
