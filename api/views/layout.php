<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <title>Sistema MVC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet">

  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css?v=<?= time() ?>">
  
</head>
<body>
<div class="container-fluid p-0">
  <div class="d-flex">
    <!-- MENU -->
    <div class="sidebar d-flex flex-column justify-content-between">
      <div>
        <h1 class="sidebar-title">
          JF<br>TECH
        </h1>
        <div class="d-flex flex-column">
        <a href="<?= BASE_URL ?>" class="menu-link"><i class="bi bi-speedometer2"> </i> - Dashboard</a>        
        <a href="<?= BASE_URL ?>/product" class="menu-link"><i class="bi bi-box-seam"> </i> - Produtos</a>
        <a href="<?= BASE_URL ?>/category" class="menu-link"><i class="bi bi-tags"> </i> - Categorias</a>
        <a href="<?= BASE_URL ?>/user" class="menu-link"><i class="bi bi-people"> </i> - Clientes</a>
        </div>
      </div>
    </div>

    <!-- CONTEÚDO -->
    <div class="main-content">
      <?php require_once "api/views/$view.php"; ?>
    </div>
  </div>
</div>
</body>
</html>