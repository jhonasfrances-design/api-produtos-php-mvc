<?php

use api\core\Controller;

class Category extends Controller{

  public function index(){

    $Category = $this->model('Category');

    $data = $Category::findAll();

    $this->view('categorias/index', ['categories' => $data]);

  }


  public function show($id = null){

    if (is_numeric($id)) {

      $Category = $this->model('Category');

      $data = $Category::findById($id);

      $this->view('categorias/show', ['category' => $data]);

    } else {

      $this->pageNotFound();

    }

  }


  public function edit($id = null){

    if (is_numeric($id)) {

      $Category = $this->model('Category');

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        try {

          $Category::updateById($id, $_POST);

          header('Location: ' . BASE_URL . '/category');

          exit;

        } catch (\PDOException $e) {

          $data = $Category::findById($id);

          $this->view(
            'categorias/edit',
            [
              'category' => $data,
              'erro' => 'Categoria já cadastrada.'
            ]
          );

          return;

        }

      }

      $data = $Category::findById($id);

      $this->view('categorias/edit', ['category' => $data]);

    } else {

      $this->pageNotFound();

    }

  }


  public function delete($id = null){

    if (is_numeric($id)) {

      $Category = $this->model('Category');

      $Category::deleteById($id);

      header('Location: ' . BASE_URL . '/category');

      exit;

    } else {

      $this->pageNotFound();

    }

  }


  public function create(){

    $Category = $this->model('Category');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      try {

        $Category::create($_POST);

        header('Location: ' . BASE_URL . '/category');

        exit;

      } catch (\PDOException $e) {

        $this->view(
          'categorias/incluir',
          ['erro' => 'Categoria já cadastrada.']
        );

        return;

      }

    }

    $this->view('categorias/incluir');

  }

}