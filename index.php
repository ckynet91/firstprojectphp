<?php

//FRONT CONTROLLER
//
//1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

// 2. Подключение файлово системы
define('ROOT', dirname(__FILE__)); //Польной путь к каталогу
require_once(ROOT . '/components/Autoload.php');
require_once(ROOT.'/components/Router.php'); //Подключения класса Router
// 3. Установка соединения с БД
require_once(ROOT.'/components/Db.php'); //Подключения к БД
// 4. Вызов Router
$router = new Router();
$router->run();