<?php 
    define('BASE_URL', 'http://localhost/API-PRODUTOS-PHP');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Simple Framework</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css"/>
  </head>
  <body>

  <?php
    require 'api/autoload.php';
    
    use api\core\App;
    use api\core\Controller;

    $app = new App();

  ?>
  <script src="/assets/js/jquery.slim.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
