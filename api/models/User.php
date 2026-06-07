<?php
namespace api\models;
use api\core\Database;
use PDO;

class User{
  public static function findAll(){
    $conn = new Database();
    $result = $conn->executeQuery(
      'SELECT * FROM usuarios ORDER BY id ASC'
    );
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

public static function findById(int $id){
    $conn = new Database();
    $result = $conn->executeQuery(
      'SELECT * FROM usuarios WHERE id = :ID LIMIT 1',
      array(
        ':ID' => $id
      )
    );
    return $result->fetch(PDO::FETCH_ASSOC);
  }

public static function create(array $data){
    $conn = new Database();
    return $conn->executeQuery(
      'INSERT INTO usuarios
      (
        nome,
        especialidade,
        idade,
        email
      )
      VALUES
      (
        :NOME,
        :ESPECIALIDADE,
        :IDADE,
        :EMAIL
      )',
      array(
        ':NOME' => $data['nome'],
        ':ESPECIALIDADE' => $data['especialidade'],
        ':IDADE' => $data['idade'],
        ':EMAIL' => $data['email']
      )
    );
  }


public static function updateById(int $id, array $data){
    $conn = new Database();
    return $conn->executeQuery(
      'UPDATE usuarios
       SET
          nome = :NOME,
          especialidade = :ESPECIALIDADE,
          idade = :IDADE,
          email = :EMAIL
       WHERE id = :ID',
      array(
        ':NOME' => $data['nome'],
        ':ESPECIALIDADE' => $data['especialidade'],
        ':IDADE' => $data['idade'],
        ':EMAIL' => $data['email'],
        ':ID' => $id
      )
    );
  }


public static function deleteById(int $id){
    $conn = new Database();
    return $conn->executeQuery(
      'DELETE FROM usuarios WHERE id = :ID',
      array(
        ':ID' => $id
      )
    );
  }
  
}