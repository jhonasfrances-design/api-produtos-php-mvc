<?php
use api\core\Controller;
class User extends Controller{
  public function index(){
    $User = $this->model('User');
    $data = $User::findAll();
    $this->view('usuarios/index', ['usuarios' => $data]);
  }

public function show($id = null){
    if (is_numeric($id)) {
      $User = $this->model('User');
      $data = $User::findById($id);
      $this->view('usuarios/visualizar', ['usuario' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  public function create(){
    $User = $this->model('User');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $User::create($_POST);
      header('Location: ' . BASE_URL . '/User');
      exit;
    }
    $this->view('usuarios/incluir');
  }

  public function edit($id = null){
    if (is_numeric($id)) {
      $User = $this->model('User');
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $User::updateById($id, $_POST);
        header('Location: ' . BASE_URL . '/User');
        exit;

      }
      $data = $User::findById($id);
      $this->view('usuarios/edit', ['usuario' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

public function delete($id = null){
  if (is_numeric($id)) {
    $User = $this->model('User');
    $User::deleteById($id);
    header('Location: ' . BASE_URL . '/User');
    exit;
  } else {
    $this->pageNotFound();
  }
}

}