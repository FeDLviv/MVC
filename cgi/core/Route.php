<?php
    class Route {

        public static function start() {
            //встановлюєм параметри по замовчуванню
            $controllerName = "main";
            $actionName = "index";
            
            //стрічка запиту парситься в масив 
            $routes = explode("/", $_SERVER["REQUEST_URI"]);
            
            //отримуєм ім'я контроллера
            if (!empty($routes[1])) {
                $controllerName = $routes[1];
            }
        
            //отримуєм ім'я екшена
            if (!empty($routes[2])) {
                $actionName = $routes[2];
            }

            //додаєм префікси
            $modelName = 'Model_'.$controllerName;
            $controllerName = 'Controller_'.$controllerName;
            $actionName = 'action_'.$actionName;

            //підключаеєм файл з класом контроллера
            if (file_exists("cgi/controllers/".$controllerName.".php")) {
                require_once("cgi/controllers/".$controllerName.".php");
            } else {
                header("Location: /404");
                exit;
            }

            //підключаеєм файл з класом моделі
            if (file_exists("cgi/models/".$modelName.".php")) {
                require_once("cgi/models/".$modelName.".php");
            } 
            
            //створюєм контроллер
            $controller = new $controllerName;
            $action = $actionName;

            // викликаємо екшен контроллера та передаємо йому параметри
            if (method_exists($controller, $action)) {
                $controller->$action(array_slice($routes, 3));
            } else {
                header("Location: /404");
                exit;
            }
        }

    }