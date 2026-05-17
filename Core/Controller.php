<?php
namespace Core;

use \Providers\Jwt;

class Controller {

	public function getMethod() {
		return $_SERVER['REQUEST_METHOD'];
	}
	public function getAuth(){
		if(empty($_SESSION['auth'])){
			header("Location: /");
		}
	}


	public function getRequestData() {

		switch($this->getMethod()) {
			case 'GET':
				return $_GET;
				break;

			case 'PUT':
				$data = json_decode(file_get_contents('php://input'));
				if(is_null($data)) {
					$data = $_POST;
				}

				return (array) $data;
				break;

			case 'DELETE':
				parse_str(file_get_contents('php://input'), $data);
				return (array) $data;
				break;
				
			case 'POST':
				$data = json_decode(file_get_contents('php://input'));

				if(is_null($data)) {
					$data = $_POST;
				}


				if(!empty($_FILES)){
					$data = array_merge($data, $_FILES);
				}
				
				return (array) $data;
				break;
		}

	}

	public function returnJson($array, $status = '200') {
        header('Content-Type: application/json');
        header("HTTP/1.0 ".$status);
        echo json_encode($array);
        exit;
    }

	public function getJwt(){
		$header = apache_request_headers();
		return $header;
	}

	public function allSessionPlataform(){

		$header = $this->getJwt();
		$jwt = new Jwt();
		$logado = $jwt->validarJwt($header);
		
		if($logado['status'] == "LOGADO"){

			$array = array(
				"cpf_global" 		=> $logado['cpf_global'],
				"login_global_a"	=> $logado['login_global_a'],
				"ip_global" 		=> $logado['ip_global']
			);
			
			return $array;
		} 
		
		header("HTTP/1.0 403");
		$array['retorno'] = 'erro';
        $array['status'] = strtolower($logado['status']);
        $array['mensagem'] = $logado['mensagem']; 
        $this->returnJson($array);
	}

	public function loadView($viewName, $viewData = array()) {
		if ($viewData){
			extract($viewData);
		}        
        include 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        include 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        include 'views/'.$viewName.'.php';
    }

}