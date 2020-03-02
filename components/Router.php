<?
class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Возвращает строку запроса
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
        {
            /*для работы на подразделах*/
            $arReq = explode('/', $_SERVER['REQUEST_URI']);
            unset($arReq[0]);
            unset($arReq[1]);
            $_SERVER['REQUEST_URI'] = implode('/', $arReq);
            /*для работы на подразделах*/
            
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        //Получаю строку запроса
        $uri = $this->getURI();

        //Проверяю наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path)
        {
            //Сравниваю $uriPattern и $uri
            if(preg_match("~$uriPattern~", $uri))
            {
                // Получаем внутренний путь из внешнего согласно правилу.

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //Определяю контроллер и action и параметр
                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                //Подключаю файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создаю объект и вызываю метод
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null)
                {
                    break;
                }
            }

        }
    }
}
?>