<?php
// Простейшая автозагрузка классов
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$uri = $_SERVER['REQUEST_URI'];
$uriPath = parse_url($uri, PHP_URL_PATH);

// Подключаем список маршрутов. Оформлено отдельным файлом для удобства настройки
$routes = require 'routes.php';

// Определяем класс для вывода данных.
// Изменить вывод данных на html можно с помощью заголовка Accept: text/html;
// По умолчанию просто число
$headers = getallheaders();
$accept = HeaderParser::getAccept($headers);
$view = ViewFactory::getView($accept);

// Запускаем маршрутизатор
Router::work($uri, $routes, $view);