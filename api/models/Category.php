<?php
namespace api\models;
use api\core\Database;
use PDO;

class Category{
    public static function findAll(){
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM categorias ORDER BY id ASC');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

 
  public static function findById(int $id){
    $conn = new Database();
    $result = $conn->executeQuery(
      'SELECT * FROM categorias WHERE id = :ID LIMIT 1',
      array(
        ':ID' => $id
      )
    );

    return $result->fetch(PDO::FETCH_ASSOC);
  }

  public static function updateById(int $id, array $data){
    $conn = new Database();
    return $conn->executeQuery(
      'UPDATE categorias 
       SET 
          nome = :NOME
       WHERE id = :ID',
      array(
        ':NOME' => $data['nome'],
        ':ID' => $id
      )
    );

  }

  public static function deleteById(int $id){
    $conn = new Database();
    return $conn->executeQuery(
      'DELETE FROM categorias WHERE id = :ID',
      array(
        ':ID' => $id
      )
    );

  }

public static function create(array $data){
  $conn = new Database();
  return $conn->executeQuery(
    'INSERT INTO categorias (nome)
    VALUES (:NOME)',
    array(':NOME' => $data['nome'])
  );
}

}