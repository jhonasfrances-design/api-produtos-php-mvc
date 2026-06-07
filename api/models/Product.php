<?php

namespace api\models;

use api\core\Database;
use PDO;
class Product{
 
  public static function findAll(){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produtos');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

 
  public static function findById(int $id){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM produtos WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetch(PDO::FETCH_ASSOC);
  }

  public static function updateById(int $id, array $data){

    $conn = new Database();

    return $conn->executeQuery(
      'UPDATE produtos 
       SET 
          nome = :NOME,
          descricao = :DESCRICAO,
          preco = :PRECO,
          estoque = :ESTOQUE,
          categoria_id = :CATEGORIA_ID
       WHERE id = :ID',
      array(
        ':NOME' => $data['nome'],
        ':DESCRICAO' => $data['descricao'],
        ':PRECO' => $data['preco'],
        ':ESTOQUE' => $data['estoque'],
        ':CATEGORIA_ID' => $data['categoria_id'],
        ':ID' => $id
      )
    );
  }

   public static function deleteById(int $id){
    $conn = new Database();
    return $conn->executeQuery(
      'DELETE FROM produtos WHERE id = :ID',
      array(
        ':ID' => $id
      )
    );
  }

  public static function create(array $data){
  $conn = new Database();
  return $conn->executeQuery(
    'INSERT INTO produtos
    (
      nome,
      descricao,
      preco,
      estoque,
      categoria_id
    )
    VALUES
    (
      :NOME,
      :DESCRICAO,
      :PRECO,
      :ESTOQUE,
      :CATEGORIA_ID
    )',
    array(
      ':NOME' => $data['nome'],
      ':DESCRICAO' => $data['descricao'],
      ':PRECO' => $data['preco'],
      ':ESTOQUE' => $data['estoque'],
      ':CATEGORIA_ID' => $data['categoria_id']
    )
  );
}

}
