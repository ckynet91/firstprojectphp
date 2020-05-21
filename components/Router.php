<?php
class Router{

	private $routes;

	public function __construct(){
		$routesPath = ROOT.'/config/routers.php'; //Сохраняем в переменую путь routes.php
		$this->routes = require($routesPath);
	}
/**
 * Возвращает запрос строки
 * @return string
 */
	private function getURI(){
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	public function run(){

			//Получаем строку запроса
			$uri = $this->getURI();

			// Проверить наличи такого запроса в routes.php
			foreach ($this->routes as $uriPattern => $path) {

				//Сравниваем $uriPattern и $uri
				if(preg_match("~$uriPattern~", $uri)){

					//Определить какой контроллер
					//и action обрабатывают запрос

					$segments = explode('/', $path);

					$controllerName = array_shift($segments).'Controller';
					$controllerName = ucfirst($controllerName);
					$actionName = 'action'.ucfirst(array_shift($segments));
					$paramenters = $segments;

					//Подключаем файл класса-контролера
					$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

					if (file_exists($controllerFile)) {
						require_once $controllerFile;
					}

					//Создаем объект, вызвать метод (т.е. action)
					$controllerObject = new $controllerName;

					$result = call_user_func_array(array($controllerObject, $actionName), $paramenters);
					
					if($result != NULL){
						break;
					}
				}
			}
	}
}