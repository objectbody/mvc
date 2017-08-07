<?php

	namespace Handle;
	
	use Phroute\Phroute\RouteCollector;
	use Phroute\Phroute\Dispatcher;
	use Phroute\Phroute\Exception\HttpRouteNotFoundException;

	class Route {

		static $router;

		static function boot(){
			Self::$router = new RouteCollector();
		}

		static function callback(String $controller){
			$controller = explode('.', $controller);
			return ['\\Controller\\'.$controller[0], $controller[1]];
		}

		static function get($path, $controller){
			Self::$router->get($path, Self::callback($controller));
		}

		static function post($path, $controller){
			Self::$router->post($path, Self::callback($controller));
		}

		static function any($path, $controller){
			Self::$router->any($path, Self::callback($controller));
		}

		static function response(){
			try {
				$dispatcher = new Dispatcher(Self::$router->getData());
				$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
				return $response;
			} catch (HttpRouteNotFoundException $e){
				echo 'Route not found';
			}
		}

	}