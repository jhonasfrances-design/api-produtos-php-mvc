<?php

namespace api\core;

class Controller{

  public function model($model){
    require 'api/models/' . $model . '.php';
    $classe = 'api\\models\\' . $model;
    return new $classe();
  }

  public function view($view, $data = []){

  extract($data);

  require_once "api/views/layout.php";

}

  public function pageNotFound(){
    $this->view('erro404');
  }
}
