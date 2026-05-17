<?php
namespace Controllers;

use \Core\Controller;

class NotfoundController extends Controller {

	public function index() {
		header("HTTP/1.0 404");
		$this->returnJson(array("erro" => array(
            "mensagem" => "Desculpe mas essa página não existe. "
        	))
        );
	}

}