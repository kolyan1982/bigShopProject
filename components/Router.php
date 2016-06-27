<?php
//1.Router предназначен для Анализа запроса и определения контроллера.
//2.Подключение контроллера и передача управления.

class Router
{

    private $routes; //это массив в котором будут хранится маршруты

    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getUri(){
        //1.Получить строку запроса
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //Будет принимать управление от FrontController

        $uri = $this->getUri();

        //2.Прверить наличие такого запроса в маршрутах routes.php

        foreach ($this->routes as $uriPattern=>$path){
                //Сравниваем $uriPattern и $uri
            if(preg_match("~$uriPattern~", $uri)){
                //Получаем внутрениий путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                //Определяем контроллер, action, параметр
                //3.Если есть совпадение, определить какой контроллер и action Обрабатывают запрос
                $segments = explode('/', $internalRoute);
                //Получаем имя контроллера
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                //Получаем имя action
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                //4.Подключить файл класса контроллера

                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if(file_exists($controllerFile)){
                    include_once ($controllerFile);
                }

                //5.Создать обьект и вызвать метод
                $controllerObject = new $controllerName();
                $result = call_user_func_array([$controllerObject,$actionName ],$parameters);
                if($result != NULL) {
                    break;
                }

            }

        }
    }

}