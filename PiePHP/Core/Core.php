<?php

namespace Core;
// require_once $_SERVER['DOCUMENT_ROOT'] . '/PiePHP/Core/Router.php';


class Core{
	public function run(){
		require_once $_SERVER['DOCUMENT_ROOT'] . '/PiePHP/routes.php';
		$url = trim($_SERVER['REQUEST_URI'], DIRECTORY_SEPARATOR);


		if($routes[$url] = Router::get($url)){ //Récupère l'url
			$controller = 'src\Controller' . DIRECTORY_SEPARATOR 
				. ucfirst($routes[$url]['controller']) . 'Controller';
			$action = $routes[$url]['action'] . 'Action';

			if(class_exists($controller)){
				$new = new $controller;//Si controller existe ça le lance
				if(method_exists($controller, $action)){
					$new->$action();//Si l'action existe ça la lance
				}
			}
		}
		
	}

}