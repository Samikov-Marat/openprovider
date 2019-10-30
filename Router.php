<?php

/**
 * Class Router Маршрутизатор
 */
class Router
{
    static function work(string $uriPath, array $routes, BaseView $view)
    {
        foreach ($routes as $pattern => $methodPath) {
            // Проверяем на соответствие текущего запроса шаблону маршрута
            $routeCheck = new RouteCheck($pattern, $uriPath);
            // Если запроса соответствует шаблону
            if ($routeCheck->isMatched()) {
                // Создаём Контроллер и вызываем метод обработки для этого маршрута
                $controller = new $methodPath[0]($view);
                $method = $methodPath[1];
                call_user_func_array(array($controller, $method), $routeCheck->getParams());
                break;
            }
        }
    }
}