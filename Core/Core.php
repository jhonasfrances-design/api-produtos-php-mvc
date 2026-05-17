<?php
namespace Core;

class Core {
	public function run() {
		$url = '/';
		
		if(isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		$url = $this->corrigirBarraNoFinal($url);		
		$url = $this->checkRoutes($url); 



		$params = array();

		if(!empty($url) && $url != '/') {	
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}
			
			if(count($url) > 0) {
				$params = $url;
			}		

		} else {
			$currentController = 'NotfoundController';
			$currentAction = 'index';
		}

		$currentController = ucfirst($currentController);

		$prefix = '\Controllers\\';

		if(!file_exists('Controllers/'.$currentController.'.php') ||
			!method_exists($prefix.$currentController, $currentAction)) {
			$currentController = 'NotfoundController';
			$currentAction = 'index';
		}	

		$newController = $prefix.$currentController;
		$c = new $newController();

		call_user_func_array(array($c, $currentAction), $params);		
	}

	public function checkRoutes($url) {
		global $routes;

		foreach($routes as $pt => $newurl) {
			$pt = $this->corrigirBarraNoFinal($pt);
			if($url == $pt){
				return $newurl;
				break;			
			}
		}
		return false;
	}

	public function corrigirBarraNoFinal($string){
		$ultimoCaracter = substr($string, -1);
		if($ultimoCaracter === "/"){
			$size = strlen($string);
			$string = substr($string,0, $size-1);
		}

		return $string;
	}
}