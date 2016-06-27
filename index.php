<?php

//Front Controller

//1.Общие настройки
//1.1 Отображение ошибок

ini_set('display_errors', 1);
error_reporting(E_ALL);


//2.Подключение файлов системы
define ('ROOT', __DIR__);
//2.1 Подключили компонент Router
require_once (ROOT . '/components/Router.php');

//3.Установка соединения с БД
require_once ROOT . '/components/Db.php';

//4.Вызов router

$router = new Router();
$router->run();