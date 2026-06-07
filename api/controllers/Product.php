<?php
use api\core\Controller;
class Product extends Controller{
  
  public function index(){
    $Product = $this->model('Product'); // é retornado o model Product()
    $data = $Product::findAll();
    $this->view('product/index', ['products' => $data]);
  }
 
  public function show($id = null){
    if (is_numeric($id)) {
      $Product = $this->model('Product');
      $data = $Product::findById($id);
      $this->view('product/visualizar', ['product' => $data]);
    } else {
      $this->pageNotFound();
    }
  }

  public function edit($id = null){
  if (is_numeric($id)) {
    $Product = $this->model('Product');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Product::updateById($id, $_POST);
      header('Location: ' . BASE_URL . '/product');
      exit;
    }
    $data = $Product::findById($id);
    $this->view('product/edit', ['product' => $data]);
  } else {
    $this->pageNotFound();
  }
}

public function delete($id = null){
  if (is_numeric($id)) {
    $Product = $this->model('Product');
    $Product::deleteById($id);
    header('Location: ' . BASE_URL . '/product');
  } else {
    $this->pageNotFound();
  }
}

public function create(){
  $Product = $this->model('Product');
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Product::create($_POST);
    header('Location: ' . BASE_URL . '/product');
    exit;
  }
  $this->view('product/incluir');
}
}
