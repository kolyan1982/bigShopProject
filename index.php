<?php

//Front Controller

//1.Общие настройки
//1.1 Отображение ошибок

ini_set('display_errors', 1);
error_reporting(E_ALL);


//2.Подключение файлов системы
define ('ROOT', __DIR__);

session_start();

//2.2 Подключили клмпонент Autoload
require_once ROOT . '/components/Autoload.php';



//4.Вызов router

$router = new Router();
$router->run();